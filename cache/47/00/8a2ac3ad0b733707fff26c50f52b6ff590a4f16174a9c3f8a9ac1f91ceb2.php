<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/07.xmpdaten */
class __TwigTemplate_47008a2ac3ad0b733707fff26c50f52b6ff590a4f16174a9c3f8a9ac1f91ceb2 extends Twig_Template
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
        echo "<h2>XMP</h2>
<hr />
<p>Unter XMP werden alle Metadaten angezeigt welche für das Media Asset definiert wurden. Dazu können auch Kamera- und Photoshop Einstellungen gehören. In diesem Bereich können keine Änderungen gemacht werden.</p>
<p><br>
";
        // line 5
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "xmp.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 35: Funktionen XMP</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/07.xmpdaten";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  34 => 11,  26 => 6,  43 => 23,  19 => 1,);
    }
}
