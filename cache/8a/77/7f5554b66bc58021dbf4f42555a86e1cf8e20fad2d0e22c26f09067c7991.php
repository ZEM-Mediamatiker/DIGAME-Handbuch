<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/04.anzeigen */
class __TwigTemplate_8a777f5554b66bc58021dbf4f42555a86e1cf8e20fad2d0e22c26f09067c7991 extends Twig_Template
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
        echo "<h2>Funktionen im Anzeige-Bereich</h2>
<p>Der Anzeige-Bereich ist der Hauptbereich in welchem alle Media Assets angezeigt werden welche über die vielfältigen Suchmöglichkeiten, beschrieben in den vorhergehenden Kapiteln, gefunden wurden. Die Auflistung der Media Assets beginnt von oben links nach unten rechts. Dabei befindet sich oben links jeweils das neueste und unten rechts das älteste Media Asset. Unten rechts wird jeweils die Anzahl gefundener Objekte angezeigt. Am unteren Ende mittig im Anzeige-Bereich findet der Benutzer einen Regler mit welchem die Grösse der Media Assets im Anzeige-Bereich eingestellt werden kann.</p>
<p><br>
";
        // line 4
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 16: Übersicht Anzeige-Bereich.</h6>
<p><br></p>
<p>Ein einzelnes Media Asset verfügt über Informationen in Form von Icons oder Texten. <br>
(1) Die Farbe gibt Auskunft über die Rechte Publikation, sobald der Benutzer mit der Maus darüber fährt wird dies auch textuell dargestellt. <br>
(2) gibt visuell Auskunft über den Dateityp. Die Icons sind von Organisation zu Organisation unterschiedlich. <br>
(3) zeigt den Titel zum Media Asset an, wird nur dargestellt bei einer bestimmten Grösse des Bildes. Änderung der Grösse des Bildes über den Zoomregler. <br>
(4) zeigt an ob ein Media Asset in Bearbeitung ist, sobald der Benutzer mit der Maus darüber fährt wird der Name des Bearbeiters angezeigt. <br>
(5) sobald der Benutzer mit der Maus darüber fährt werden folgende Metadaten angezeigt (AssetId, Titel und Beschreibung)</p>
<p><br>
";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 17: Informationsübersicht Media Asset.</h6>
<p><br></p>
<p>Durch Doppelklick auf ein Media Asset wird eine Vollbildansicht geöffnet. Dies funktioniert nur für Bilder, Videos können nicht in Vollbildansicht betrachtet werden. Unter (1) wird die Asset ID angezeigt. Mit (2) oder mit dem Button „Schliessen“ aus (4) kann die Vollbildansicht beendet werden. In (3) wird jeweils das Originalbild angezeigt. Mit den Pfeilen aus (4) kann jeweils zum vorherigen oder zum nächsten Media Asset gewechselt werden.</p>
<p><br>
";
        // line 19
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 18: Vollbild Ansicht.</h6>
<p><br></p>
<hr />
<h2>Funktionen Bearbeiten-Bereich</h2>
<p>Der Bearbeiten-Bereich (6) aus Abbildung 2: Grundaufbau enthält alle Möglichkeiten um ein Media Asset zu bearbeiten. Nachdem ein Media Asset erstellt wurde oder ein bestehendes Media Asset über eine der Suchmöglichkeiten gefunden wurde, können dessen Daten definiert oder bestehende bearbeitet werden. Dazu muss das entsprechende Media Asset mit der Maus angewählt werden. Das angewählte Media Asset wird zur Markierung mit einem gelben Rahmen umgeben. Im Bearbeiten-Bereich werden die Daten des markierten Media Assets dargestellt.</p>
<p>Falls mehrere Assets über dieselben Metadaten verfügen, können diese auch gleichzeitig bearbeitet werden. Dazu müssen alle Assets die gemeinsam bearbeitet werden sollen markiert werden. Dies kann mit Ctrl + linke Maustaste oder Shift + linke Maustaste gemacht werden.</p>
<p>Der Bearbeiten-Bereich verfügt über folgende Funktionen und Informationen:</p>
<ul>
<li>Bearbeiten (1): Dateihandling und generelle Informationen zur effektiven Datei (Bild, Video, Dokument)</li>
<li>Gruppieren (2): erlaubt mehrere Media Assets in einer thematischen Gruppe zusammenzufassen.</li>
<li>Stichworte (3): Zuordnung zu Stichworten im Stichwortbaum</li>
<li>Schema Viewer (4): zeigt alle vorhandenen Metadaten nur lesend an</li>
<li>Schema Editor (5): hier werden die Metadaten definiert und bearbeitet</li>
<li>Vorschaubilder (6): hier werden die Bilder angezeigt und verwaltet welche im Anzeige-Bereich verwendet werden sollen</li>
<li>Video (7): der Videoplayer wird nur angezeigt, wenn es sich um einen Film handelt</li>
<li>XMP (8): zeigt alle Metadaten an, welche zum Media Asset gehören, nebst den Digame-Metadaten auch Kameradaten oder Daten von Photoshop.</li>
</ul>
<p><br>
";
        // line 38
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 19: Übersicht über den Bearbeiten-Bereich.</h6>
<p><br></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/04.anzeigen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 38,  45 => 19,  37 => 14,  24 => 4,  19 => 1,);
    }
}
