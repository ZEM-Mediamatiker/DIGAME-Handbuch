<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/05.schema */
class __TwigTemplate_48496ba711d6bd0200d99046f77879e3af98da10443d13140449ab62c8355068 extends Twig_Template
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
        echo "<h2>Schema Viewer</h2>
<hr />
<p>Im Schema Viewer werden alle erfassten Metadaten zu einem Media Asset in einer übersichtlichen kompakten Form zusammengefasst. In dieser Ansicht können keine Änderungen gemacht werden.</p>
<p><br></p>
";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "schemaviewer.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 29: Funktionen Schema Viewer</h6>
<p><br></p>
<hr />
<h2>Schema Editor</h2>
<p>Hier werden die Metadaten für jedes Media Asset definiert. Jedes Metadatenfeld kann unterschiedliche Ausprägungen haben. Die Beschreibung (2) hat zu Beginn ein Häkchen welches bedeutet, dass das Metadatenfeld ein Pflichtfeld ist und ausgefüllt werden muss. Weiter kann das Feld in verschiedenen Sprachen erfasst werden.
Mit den Knöpfen in (3) können die Änderungen gespeichert oder verworfen werden. Mit dem Knopf „Validieren“ kann überprüft werden ob alle Pflichtfelder ausgefüllt wurden. Ist dies nicht der Fall wird eine Fehlermeldung angezeigt Abbildung 31: Fehler Validierung.</p>
<p><br></p>
";
        // line 13
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "schemaeditor.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 30: Funktionen Schema Editor</h6>
<p><br></p>
<p>Es ist möglich für mehrere Media Assets gleichzeitig die Metadaten zu definieren. Dies ist hilfreich wenn mehrere Media Assets über dieselben Metadaten verfügt. Sind bei den Media Assets bereits Metadaten definiert und sind diese nicht identisch können diese mit einem neuen Wert überschrieben werden.</p>
<p><br></p>
";
        // line 18
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "schemamehrere.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 31: Bearbeitung mehrerer Media Assets</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/05.schema";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 18,  36 => 13,  25 => 5,  19 => 1,);
    }
}
