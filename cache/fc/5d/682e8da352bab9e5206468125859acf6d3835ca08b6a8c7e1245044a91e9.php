<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/03.filtern */
class __TwigTemplate_fc5d682e8da352bab9e5206468125859acf6d3835ca08b6a8c7e1245044a91e9 extends Twig_Template
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
<p>Der Bereich Filter dient dazu die Anzahl Media Assets anhand bestimmter Merkmale zu reduzieren.</p>
<p><br>
";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
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
<h3>Stichworte</h3>
<p>Ordner (1) bildet den Stichwortbaum ab, dieser wird in 3.7.3 Stichworte beschrieben. Wählt der Benutzer einen bestimmten Ordner werden genau die Assets im Anzeige-Bereich (2) angezeigt welchen dieses Stichwort zugeordnet wurde.</p>
<p><br>
";
        // line 17
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 10: Stichwortbaum.</h6>
<p><br></p>
<h3>Benutzerdefinierte Filter</h3>
<p>Auf der Hauptebene Filter sind 2 Funktionen (1) vorhanden. Das erste Icon dient dazu einen neuen Filter zu erstellen. Das zweite Icon dient dazu die Filteranzeige zu aktualisieren, damit nach der Erstellung eines neuen Filters dieser in der Liste angezeigt wird.
Jeder einzelne benutzerdefinierte Filter verfügt über 2 Funktionen (2). Mit dem ersten Icon wird das Bearbeitungsfenster geöffnet damit können die Bedingungen des Filters angepasst werden. Mit dem zweiten Icon kann ein benutzerdefinierter Filter gelöscht werden. Ein gelöschter benutzerdefinierter Filter kann nicht wiederhergestellt werden.</p>
<p><br>
";
        // line 24
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 11: Funktionen Filter.</h6>
<p><br></p>
<p>Ein benutzerdefinierter Filter besteht aus einer Hauptbedingung (1) hier kann definiert werden ob „alle“ oder „mind. Eine“ Bedingung (2) erfüllt werden müssen damit ein Media Asset angezeigt wird.</p>
<p><br>
";
        // line 29
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 12: Filtderfefinition.</h6>
<p><br></p>
<p>Der Aufbau einer Bedingung sieht wie folgt aus (siehe Abbildung 13: Filter erstellen).
Unter (2) wird das jeweilige Metadatenfeld definiert welches bei der Suche berücksichtigt werden soll. In diesem Beispiel die Beschreibung.
(3) ist ein optionales Feld und erscheint nur wenn es sich um ein Metadatenfeld handelt welches in unterschiedlichen Sprachen vorhanden ist.
Mit (4) kann definiert werden wie der Suchtext berücksichtigt werden soll.
Nachfolgend sind die Möglichkeiten aufgeführt welche ein entsprechendes Media Asset Anzeigen würden.</p>
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
</tbody>
</table>";
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
        return array (  58 => 29,  50 => 24,  40 => 17,  24 => 4,  19 => 1,);
    }
}
