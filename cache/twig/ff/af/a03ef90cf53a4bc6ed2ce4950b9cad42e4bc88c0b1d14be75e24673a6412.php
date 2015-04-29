<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/04.anzeigen */
class __TwigTemplate_ffafa03ef90cf53a4bc6ed2ce4950b9cad42e4bc88c0b1d14be75e24673a6412 extends Twig_Template
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
<hr />
<p>Der Anzeige-Bereich ist der Hauptbereich in welchem alle Media Assets angezeigt werden welche über die vielfältigen Suchmöglichkeiten, beschrieben in den vorhergehenden Kapiteln, gefunden wurden. Die Auflistung der Media Assets beginnt von oben links nach unten rechts. Dabei befindet sich oben links jeweils das neueste und unten rechts das älteste Media Asset. Unten rechts wird jeweils die Anzahl gefundener Objekte angezeigt. Am unteren Ende mittig im Anzeige-Bereich findet der Benutzer einen Regler mit welchem die Grösse der Media Assets im Anzeige-Bereich eingestellt werden kann.</p>
<p><br></p>
";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "anzeigen.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 16: Übersicht Anzeige-Bereich.</h6>
<p><br></p>
<p>Ein einzelnes Media Asset verfügt über Informationen in Form von Icons oder Texten. <br>
(1) Die Farbe gibt Auskunft über die Rechte Publikation, sobald der Benutzer mit der Maus darüber fährt wird dies auch textuell dargestellt. <br>
(2) gibt visuell Auskunft über den Dateityp. Die Icons sind von Organisation zu Organisation unterschiedlich. <br>
(3) zeigt den Titel zum Media Asset an, wird nur dargestellt bei einer bestimmten Grösse des Bildes. Änderung der Grösse des Bildes über den Zoomregler. <br>
(4) zeigt an ob ein Media Asset in Bearbeitung ist, sobald der Benutzer mit der Maus darüber fährt wird der Name des Bearbeiters angezeigt. <br>
(5) sobald der Benutzer mit der Maus darüber fährt werden folgende Metadaten angezeigt (AssetId, Titel und Beschreibung)</p>
<p><br></p>
";
        // line 15
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "grossansicht.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 17: Informationsübersicht Media Asset.</h6>
<p><br></p>
<p>Durch Doppelklick auf ein Media Asset wird eine Vollbildansicht geöffnet. Dies funktioniert nur für Bilder, Videos können nicht in Vollbildansicht betrachtet werden. Unter (1) wird die Asset ID angezeigt. Mit (2) oder mit dem Button „Schliessen“ aus (4) kann die Vollbildansicht beendet werden. In (3) wird jeweils das Originalbild angezeigt. Mit den Pfeilen aus (4) kann jeweils zum vorherigen oder zum nächsten Media Asset gewechselt werden.</p>
<p><br></p>
";
        // line 20
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "vollbild.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 18: Vollbild Ansicht.</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/03.anwenderfunktionen/04.anzeigen";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  38 => 15,  25 => 5,  19 => 1,);
    }
}