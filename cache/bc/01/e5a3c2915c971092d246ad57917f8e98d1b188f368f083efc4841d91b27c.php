<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/02.arbeitsbereich */
class __TwigTemplate_bc01e5a3c2915c971092d246ad57917f8e98d1b188f368f083efc4841d91b27c extends Twig_Template
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
        echo "<h2>Funktionen Arbeitsbereich</h2>
<p>Im Arbeits-Bereich kann nach Media Assets gesucht oder neue Media Assets erstellt werden.</p>
<p><br>
";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Der Funktionen Arbeitsbereich in der Übersicht.</h6>
<p><br></p>
<h3>Einfache Suche</h3>
<p>Wird in (1) das Textfeld leergelassen und der Knopf Go betätigt gibt es keine Einschränkung der Suche. Es werden alle Media Assets angezeigt welche sich innerhalb der Organisation befinden. Im Textfeld kann ein beliebiger Text eingegeben werden oder auch eine Asset Id, dadurch kann die Anzahl gefundener Media Assets reduziert werden. Es wird nur noch nach Media Assets gesucht, welche in den Metadaten die entsprechenden Wörter enthalten. Dabei muss beachtet werden, dass in allen Metadaten nach einer Übereinstimmung gesucht wird. Wird bspw. ein Name eingegeben kann dieser im Titel in der Beschreibung aber eben auch beim Urheber gefunden werden.</p>
<h3>Erweiterte Suche</h3>
<p>In (3) aus Abbildung 7: Funktionen Arbeitsbereich kann eine detailliertere Suche definiert werden. Die Möglichkeiten bei der erweiterten Suche sind dieselben wie bei der Definition eines Filters (siehe dazu Error! Reference source not found. Error! Reference source not found.).</p>
<h3>Assets erstellen</h3>
<p>Durch betätigen des Knopf Assets erzeugen (2) aus Abbildung 7: Funktionen Arbeitsbereich können neue Media Assets erstellt werden.
Ein Dateiexplorer Fenster wird geöffnet. Damit kann das entsprechende Originalfile gewählt werden aus welchem ein Media Asset erzeugt werden soll.
Es ist möglich mehrere Files anzuwählen und Media Assets daraus zu erstellen. Weiter ist es möglich direkt Media Assets aus Originalfiles zu erstellen, welche in einem ZIP zusammengefasst sind.</p>
<p><br>
";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Fortschrittsanzeige beim Erstellen eines Assets.</h6>
<p><br></p>
<p>Der Balken (1) zeigt den gesamt Fortschritt des Prozess zur Erzeugung von Media Assets an.
Der Balken (2) zeigt den Fortschritt und den jeweiligen Namen eines einzelnen Files an.
Der Knopf (3) verfügt über zwei Funktionen. Während der Prozess zur Erzeugung von Media Assets läuft wird der Text Hintergrund angezeigt. Dies erlaubt dem Benutzer an bereits erzeugten Media Assets weiterzuarbeiten und den Erstellungsprozess im Hintergrund laufen zu lassen. Wird der Dialog im Vordergrund behalten, erscheint sobald der gesamte Prozess abgeschlossen ist und alle Media Assets erzeugt wurden der Text Schliessen auf dem Knopf (3). Der Benutzer kann den Knopf (3) betätigen und der Dialog verschwindet.</p>
<p>Folgende Formate werden in Digame unterstützt:</p>
<ul>
<li>Bilder: .jpg, .png, .tiff, .eps</li>
<li>Filme: .mp4, .mv4, .mov</li>
<li>Dokumente: .pdf, .doc</li>
<li>Archive: .zip</li>
</ul>
<p>Information: für eps-Dateien können keine Vorschaubilder automatisch erstellt werden. Das Vorschaubild muss manuell hinzugefügt werden.</p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/02.arbeitsbereich";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 16,  24 => 4,  19 => 1,);
    }
}
