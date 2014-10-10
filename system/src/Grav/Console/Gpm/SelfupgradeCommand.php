<?php
namespace Grav\Console\Gpm;

use Grav\Common\Filesystem\Folder;
use Grav\Common\GPM\Upgrader;
use Grav\Common\GPM\Installer;
use Grav\Common\GPM\Response;
use Grav\Console\ConsoleTrait;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;

class SelfupgradeCommand extends Command
{
    use ConsoleTrait;

    protected $data;
    protected $extensions;
    protected $updatable;
    protected $file;
    protected $types = array('plugins', 'themes');

    protected function configure()
    {
        $this
            ->setName("self-upgrade")
            ->setAliases(['selfupgrade'])
            ->addOption(
                'force',
                'f',
                InputOption::VALUE_NONE,
                'Force re-fetching the data from remote'
            )
            ->addOption(
                'all-yes',
                'y',
                InputOption::VALUE_NONE,
                'Assumes yes (or best approach) instead of prompting'
            )
            ->setDescription("Detects and performs an update of plugins and themes when available")
            ->setHelp('The <info>update</info> command updates plugins and themes when a new version is available');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->setupConsole($input, $output);
        $this->upgrader = new Upgrader($this->input->getOption('force'));

        $local   = $this->upgrader->getLocalVersion();
        $remote  = $this->upgrader->getRemoteVersion();
        $update  = $this->upgrader->getAssets()->{'grav-update'};
        $release = strftime('%c', strtotime($this->upgrader->getReleaseDate()));

        if (!$this->upgrader->isUpgradable()) {
            $this->output->writeln("You are already running the latest version of Grav (v" . $local . ") released on " . $release);
            exit;
        }

        $questionHelper = $this->getHelper('question');
        $skipPrompt     = $this->input->getOption('all-yes');

        $this->output->writeln("Grav v<cyan>$remote</cyan> is now available [release date: $release].");
        $this->output->writeln("You are currently using v<cyan>".GRAV_VERSION."</cyan>.");

        if (!$skipPrompt) {
            $question = new ConfirmationQuestion("Would you like to read the changelog before proceeding? [y|N] ", false);
            $answer   = $questionHelper->ask($this->input, $this->output, $question);

            if ($answer) {
                $changelog = $this->upgrader->getChangelog(GRAV_VERSION);

                $this->output->writeln("");
                foreach ($changelog as $version => $log) {
                    $title = $version . ' [' . $log->date . ']';
                    $content = preg_replace_callback("/\d\.\s\[\]\(#(.*)\)/", function($match){
                        return "\n".ucfirst($match[1]).":";
                    }, $log->content);

                    $this->output->writeln($title);
                    $this->output->writeln(str_repeat('-', strlen($title)));
                    $this->output->writeln($content);
                    $this->output->writeln("");
                }

                $question = new ConfirmationQuestion("Press [ENTER] to continue.", true);
                $questionHelper->ask($this->input, $this->output, $question);
            }

            $question = new ConfirmationQuestion("Would you like to upgrade now? [y|N] ", false);
            $answer   = $questionHelper->ask($this->input, $this->output, $question);

            if (!$answer) {
                $this->output->writeln("Aborting...");

                exit;
            }
        }

        $this->output->writeln("");
        $this->output->writeln("Preparing to upgrade to v<cyan>$remote</cyan>..");

        $this->output->write("  |- Downloading upgrade [" . $this->formatBytes($update->size) . "]...     0%");
        $this->file = $this->download($update);

        $this->output->write("  |- Installing upgrade...  ");
        $installation = $this->upgrade();

        if (!$installation) {
            $this->output->writeln("  '- <red>Installation failed or aborted.</red>");
            $this->output->writeln('');
        } else {
            $this->output->writeln("  '- <green>Success!</green>  ");
            $this->output->writeln('');
        }
    }

    private function download($package)
    {
        $this->tmp = CACHE_DIR . DS . 'tmp/Grav-' . uniqid();
        $output    = Response::get($package->download, [], [$this, 'progress']);

        Folder::mkdir($this->tmp);

        $this->output->write("\x0D");
        $this->output->write("  |- Downloading upgrade [" . $this->formatBytes($package->size) . "]...   100%");
        $this->output->writeln('');

        file_put_contents($this->tmp . DS . $package->name, $output);

        return $this->tmp . DS . $package->name;
    }

    private function upgrade()
    {
        $installer   = Installer::install($this->file, GRAV_ROOT, ['sophisticated' => true, 'overwrite' => true, 'ignore_symlinks' => true]);
        $errorCode   = Installer::lastErrorCode();
        Folder::delete($this->tmp);

        if ($errorCode & (Installer::ZIP_OPEN_ERROR | Installer::ZIP_EXTRACT_ERROR)) {
            $this->output->write("\x0D");
            // extra white spaces to clear out the buffer properly
            $this->output->writeln("  |- Installing upgrade...    <red>error</red>                             ");
            $this->output->writeln("  |  '- " . $installer->lastErrorMsg());

            return false;
        }

        $this->output->write("\x0D");
        // extra white spaces to clear out the buffer properly
        $this->output->writeln("  |- Installing upgrade...    <green>ok</green>                             ");

        return true;
    }

    public function progress($progress)
    {
        $this->output->write("\x0D");
        $this->output->write("  |- Downloading upgrade [" . $this->formatBytes($progress["filesize"]) . "]... " . str_pad($progress['percent'], 5, " ", STR_PAD_LEFT) . '%');
    }

    public function formatBytes($size, $precision = 2)
    {
        $base = log($size) / log(1024);
        $suffixes = array('', 'k', 'M', 'G', 'T');

        return round(pow(1024, $base - floor($base)), $precision) . $suffixes[floor($base)];
    }
}