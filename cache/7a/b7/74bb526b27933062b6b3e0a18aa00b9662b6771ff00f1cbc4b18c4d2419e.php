<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/06.vorschau */
class __TwigTemplate_7ab774bb526b27933062b6b3e0a18aa00b9662b6771ff00f1cbc4b18c4d2419e extends Twig_Template
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
        echo "<h2>Vorschaubilder</h2>
<hr />
<p>Zeigt das Bild welches in den jeweiligen Ansichten ausser Vollbild dargestellt wird. Unter (2) wird das aktuell gewählte Vorschaubild dargestellt. Für ein Media Asset können mehrere Vorschaubilder definiert werden. Mit dem Plusknopf aus (3) kann ein weiteres Bild hinzugefügt werden. Mit dem Knopf mit dem Kreuz kann ein Bild wieder entfernt werden.
Weiter kann ein Vorschaubild mit niedriger Auflösung dem Media Asset hinzugefügt werden.</p>
<p><br>
";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 33: Funktionen Vorschaubilder<br></h6>
<p><br></p>
<hr />
<h2>Video</h2>
<hr />
<p>Videos können mit Hilfe des integrierten Players betrachtet werden.</p>
<p><br>
";
        // line 14
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 34: Funktionen Video</h6>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/06.vorschau";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  26 => 6,  19 => 1,);
    }
}
