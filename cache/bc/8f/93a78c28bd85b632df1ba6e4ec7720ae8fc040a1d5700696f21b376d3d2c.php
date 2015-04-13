<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/03.filtern */
class __TwigTemplate_bc8f93a78c28bd85b632df1ba6e4ec7720ae8fc040a1d5700696f21b376d3d2c extends Twig_Template
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
        echo "<h2>Funktionen Filterbereich</h2>
<hr />
<p>Der Bereich Filter dient dazu die Anzahl Media Assets anhand bestimmter Merkmale zu reduzieren.</p>
<p><br>
";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "overview.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 9: Übersicht Filterbereich.</h6>
<p><br></p>
<p>Es gibt dazu 4 Bereiche welche eine Einschränkung erlauben.</p>
<ul>
<li>Ordner (1) bezieht sich auf die Stichworte welche einem Media Asset zugewiesen wurden.</li>
<li>benutzerdefinierte Filter (2) bezieht sich auf die Metadaten der Media Assets</li>
<li>vordefinierte Filter (3)</li>
<li>Dateityp und Publikation (4)</li>
</ul>
<hr />
<h2>Stichworte</h2>
<p>Ordner (1) bildet den Stichwortbaum ab, dieser wird in 3.7.3 Stichworte beschrieben. Wählt der Benutzer einen bestimmten Ordner werden genau die Assets im Anzeige-Bereich (2) angezeigt welchen dieses Stichwort zugeordnet wurde.</p>
<p><br>
";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "stichworte.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 10: Stichwortbaum.</h6>
<p><br></p>
<hr />
<h2>Benutzerdefinierte Filter</h2>
<p>Auf der Hauptebene Filter sind 2 Funktionen (1) vorhanden. Das erste Icon dient dazu einen neuen Filter zu erstellen. Das zweite Icon dient dazu die Filteranzeige zu aktualisieren, damit nach der Erstellung eines neuen Filters dieser in der Liste angezeigt wird.
Jeder einzelne benutzerdefinierte Filter verfügt über 2 Funktionen (2). Mit dem ersten Icon wird das Bearbeitungsfenster geöffnet damit können die Bedingungen des Filters angepasst werden. Mit dem zweiten Icon kann ein benutzerdefinierter Filter gelöscht werden. Ein gelöschter benutzerdefinierter Filter kann nicht wiederhergestellt werden.</p>
<p><br>
";
        // line 27
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "eigenefilter.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 11: Funktionen Filter.</h6>
<p><br></p>
<p>Ein benutzerdefinierter Filter besteht aus einer Hauptbedingung (1) hier kann definiert werden ob „alle“ oder „mind. Eine“ Bedingung (2) erfüllt werden müssen damit ein Media Asset angezeigt wird.</p>
<p><br>
";
        // line 32
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "filterbearbeiten.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 12: Filterdefinition.</h6>
<p><br></p>
<p>Der Aufbau einer Bedingung sieht wie folgt aus (siehe Abbildung 13: Filter erstellen).
Unter (2) wird das jeweilige Metadatenfeld definiert welches bei der Suche berücksichtigt werden soll. In diesem Beispiel die Beschreibung.
(3) ist ein optionales Feld und erscheint nur wenn es sich um ein Metadatenfeld handelt welches in unterschiedlichen Sprachen vorhanden ist.
Mit (4) kann definiert werden wie der Suchtext berücksichtigt werden soll.
Nachfolgend sind die Möglichkeiten aufgeführt welche ein entsprechendes Media Asset Anzeigen würden.</p>
<p><br></p>
<table>
<thead>
<tr>
<th>Suchverhalten (4)</th>
<th>Text in Metadaten</th>
<th>Suchtext (5)</th>
</tr>
</thead>
<tbody>
<tr>
<td>beinhaltet</td>
<td>Wenn Hans nach Hause geht</td>
<td>Hans</td>
</tr>
<tr>
<td>beginnt mit</td>
<td>Wenn Hans nach Hause geht</td>
<td>Wenn Hans</td>
</tr>
<tr>
<td>gleich</td>
<td>Wenn Hans nach Hause geht</td>
<td>Wenn Hans nach Hause geht</td>
</tr>
</tbody>
</table>
<p><br></p>
<p>Mit (5) wird der gewünschte Suchtext definiert.
Mit (6) kann eine weitere Bedingung hinzugefügt werden.
Mit (7) kann eine definierte Bedingung gelöscht werden. Dazu müssen mindestens 2 Bedingungen vorhanden sein.
Unter (8) kann der Name definiert werden welcher in der Filterübersicht angezeigt wird.
Wird (9) betätigt, so wird der benutzerdefinierte Filter gespeichert.
Wird (10) betätigt gehen die Änderungen verloren oder der neue benutzerdefinierte Filter wird nicht gespeichert.</p>
<p><br>
";
        // line 75
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "neuerfilter.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 13: Filter erstellen.</h6>
<p><br></p>
<p>Wählt man mit der Maus nun einen benutzerdefinierten Filter aus, in unserem Beispiel den Filter mit dem Namen „Internet“, werden im Bereich (5) aus Abbildung 2: Grundaufbau alle Media Assets angezeigt welche diesem Filter entsprechen.</p>
<p><br>
";
        // line 80
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "filteruebersicht.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 14: Übersicht Filter.</h6>
<p><br></p>
<hr />
<h2>Vordefinierte Filter</h2>
<ul>
<li>Assets in Bearbeitung: Enthält alle Media Assets die von einem Benutzer ausgecheckt sind und von diesem bearbeitet werden.</li>
<li>Assets ohne Stichworte: Enthält alle Media Assets welche über keine Stichworte verfügen und daher auch im Stichwortbaum nicht angezeigt werden.</li>
<li>Papierkorb: Enthält alle Media Assets welche gelöscht werden können.</li>
</ul>
<hr />
<h2>Dateityp und Rechte Publikation</h2>
<p>Unter Rechte Publikation (2) kann man sich eine Ablage vorstellen. Die Rechte Publikation wird verwendet um die Sichtbarkeit der Media Assets zu steuern. Ein Media Asset welches die Rechte Publikation Internet hat ist beispielsweise auch für eine angeschlossene Applikation (bspw. www.mediathek.admin.ch) sichtbar. Ein Media Asset welches die Rechte Publikation Zem hat ist nur innerhalb von Digame sichtbar.</p>
<p>Unter Datei Typen (3) kann eine Suche auf den Dateityp der effektiven Mediadateien eingeschränkt werden. Es werden dann je nach Auswahl nur noch Bilder oder Filme angezeigt.</p>
<p>Bei einer Kombination aus (2) und (3) kann bspw. eine Suche definiert werden, welche alle Bilder (3) anzeigt welche über die Rechte Internet (2) verfügen.</p>
<p><br>
";
        // line 96
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "rechte.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 15: Rechte und Dateitypen.</h6>
<p><br></p>
<p>Die Einstellungen die der Benutzer in den Bereichen (2) und (3) vornimmt haben Einfluss auf folgende Suchergebnisse.</p>
<ul>
<li>Ergebnisse aus dem Stichwortbaum</li>
<li>Ergebnisse der benutzerdefinierten Filter</li>
<li>Ergebnisse des vordefinierten Filters</li>
<li>Ergebnisse der einfachen Suche (3.4.1)</li>
<li>Ergebnisse der erweiterten Suche (3.4.2)</li>
</ul>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/03.filtern";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 96,  115 => 80,  107 => 75,  61 => 32,  53 => 27,  42 => 19,  25 => 5,  19 => 1,);
    }
}
