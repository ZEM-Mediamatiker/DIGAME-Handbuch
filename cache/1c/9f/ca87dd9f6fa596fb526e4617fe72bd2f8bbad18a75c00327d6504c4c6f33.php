<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/07.xmpdaten */
class __TwigTemplate_1c9fca87dd9f6fa596fb526e4617fe72bd2f8bbad18a75c00327d6504c4c6f33 extends Twig_Template
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
<h6>Bild 34: Funktionen XMP</h6>
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
        return array (  25 => 5,  19 => 1,);
    }
}
