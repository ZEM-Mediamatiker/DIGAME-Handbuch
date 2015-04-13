<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/01.grundlagen */
class __TwigTemplate_6230e1758ae6103896b400a29329a702db0b5d12c06800b5ca26c8ede3d8081c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Grundaufbau DIGAME</h2>
<p>DIGAME kann in 5 Grundbereiche aufgeteilt werden:</p>
<ul>
<li>
<p>Im Menü-Bereich (2) sind alle Menüs aufgeführt über welche ein Benutzer verfügt. Für die tägliche Arbeit reicht das Menü Katalog. In diesem befindet sich der Anwender nachdem er sich angemeldet hat. Das Menü Passwort ändern kann vom Anwender zum Ändern seines Passworts verwendet werden. Der Benutzer wird jedoch nicht automatisch dazu aufgefordert. Die restlichen Menüs bieten administrative Funktionalitäten an. Im Arbeits-Bereich (3) kann mit einer einfachen Suche nach bestimmten Media Assets gesucht werden. Über die Erweiterte Suche können die Suchparameter verfeinert werden. Über den Knopf Asset erzeugen kann ein neues Media Asset erstellt werden.</p>
</li>
<li>
<p>Im Filter-Bereich (4) werden Media Assets nach bestimmten Kriterien aufgelistet. Die gefundenen Assets können auf Datei Typ und Rechte Publikation eingeschränkt werden.</p>
</li>
<li>
<p>Im Anzeige-Bereich (5) werden alle über (3 oder 4) gefundenen Media Assets angezeigt.</p>
</li>
<li>Im Filter-Bereich (4) werden Media Assets nach bestimmten Kriterien aufgelistet. Die gefundenen Assets können auf Datei Typ und Rechte Publikation eingeschränkt werden.</li>
</ul>
<hr />
<p>";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "overview.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h7>Bild: Programmoberfläche von DIGAME</h7>
<hr />
<h2>An- und Abmelden</h2>
<p>Der Benutzer muss sich bei DIGAME an- und abmelden. Der Benutzer gibt dazu seinen Benutzernamen (1) und sein Passwort (2) ein. Bevor er den Knopf Anmelden (5) betätigt muss er in (3) seine Organisation wählen. Falls der Benutzer eine falsche Organisation auswählt kann er sich nicht anmelden. Über (4) kann die gewünschte Applikationssprache gewählt werden. Momentan sind die Sprachen Englisch und Deutsch möglich.</p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/01.grundlagen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  19 => 1,);
    }
}
