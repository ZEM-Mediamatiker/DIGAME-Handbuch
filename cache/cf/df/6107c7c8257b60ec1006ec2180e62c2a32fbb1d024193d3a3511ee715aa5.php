<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/01.grundlagen */
class __TwigTemplate_cfdf6107c7c8257b60ec1006ec2180e62c2a32fbb1d024193d3a3511ee715aa5 extends Twig_Template
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
<p><br></p>
<p>";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "overview.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Programmoberfläche von DIGAME.</h6>
<p><br></p>
<hr />
<h2>An- und Abmelden</h2>
<p>Der Benutzer muss sich bei DIGAME an- und abmelden. Der Benutzer gibt dazu seinen Benutzernamen (1) und sein Passwort (2) ein. Bevor er den Knopf Anmelden (5) betätigt muss er in (3) seine Organisation wählen. Falls der Benutzer eine falsche Organisation auswählt kann er sich nicht anmelden. Über (4) kann die gewünschte Applikationssprache gewählt werden. Momentan sind die Sprachen Englisch und Deutsch möglich.</p>
<p><br></p>
<p>";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "login.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Das Anmeldefenster beim Programmstart.</h6>
<p><br></p>
<p>Die Benutzeridentifikation wird rechts oben in der Menüleiste angezeigt (Abbildung 2: Grundaufbau). Durch betätigen des Knopfs Abmelden wird der Benutzer am System abgemeldet.</p>
<hr />
<h2>Passwort ändern</h2>
<p>Der Benutzer kann jederzeit sein Passwort ändern. Dazu muss er im Menü-Bereich (2) aus Abbildung 2: Grundaufbau das Menü Passwort ändern wählen.
<br></p>
<p>";
        // line 31
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "password.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Die Einstellung zum Ändern des eigenen Passworts.</h6>
<p><br>
In Feld (1) wird der Benutzername des angemeldeten Benutzers dargestellt. Dieser kann vom Benutzer nicht geändert werden.
Im Feld (2) muss der Benutzer das aktuelle Passwort eingeben.
Im Feld (3) muss der Benutzer das neue Passwort eingeben.
Im Feld (4) muss der Benutzer das neue Passwort zur Bestätigung ein zweites Mal eingeben.</p>
<p>Sind alle Eingaben korrekt erscheint nach dem Betätigen von (5) Passwort ändern die Meldung, dass das Passwort geändert wurde.
Der Prozess Passwort ändern kann abgebrochen werden, in dem der Benutzer im Menü-Bereich (2) aus Abbildung 2: Grundaufbau in das Hauptmenü Katalog wechselt.</p>
<hr />
<h2>Funktionen Arbeitsbereich</h2>
<p>Im Arbeits-Bereich kann nach Media Assets gesucht oder neue Media Assets erstellt werden.</p>
<p><br>
";
        // line 44
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
        // line 56
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild: Fortschrittsanzeige beim Erstellen eines Assets.</h6>
<p><br></p>
<p>Der Balken (1) zeigt den gesamt Fortschritt des Prozess zur Erzeugung von Media Assets an.
Der Balken (2) zeigt den Fortschritt und den jeweiligen Namen eines einzelnen Files an.
Der Knopf (3) verfügt über zwei Funktionen. Während der Prozess zur Erzeugung von Media Assets läuft wird der Text Hintergrund angezeigt. Dies erlaubt dem Benutzer an bereits erzeugten Media Assets weiterzuarbeiten und den Erstellungsprozess im Hintergrund laufen zu lassen. Wird der Dialog im Vordergrund behalten, erscheint sobald der gesamte Prozess abgeschlossen ist und alle Media Assets erzeugt wurden der Text Schliessen auf dem Knopf (3). Der Benutzer kann den Knopf (3) betätigen und der Dialog verschwindet.</p>
<p>Folgende Formate werden in Digame unterstützt:</p>
<p>Bilder: .jpg, .png, .tiff, .eps</p>
<ul>
<li>Filme: .mp4, .mv4, .mov</li>
<li>Dokumente: .pdf, .doc</li>
<li>Archive: .zip</li>
</ul>";
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
        return array (  88 => 56,  73 => 44,  57 => 31,  46 => 23,  36 => 16,  19 => 1,);
    }
}
