<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/03.gruppieren */
class __TwigTemplate_c2bd34b2ce3b7c69ac6b28b4d7ccd104d671c150e4504bb0d07711164d6a94c9 extends Twig_Template
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
        echo "<h2>Gruppieren</h2>
<hr />
<p>Mehrere Media Assets können zu Gruppen zusammengefasst werden. Eine Gruppe ist meist thematisch.
(2) zeigt alle Media Assets an die in der Gruppe zusammengefasst sind. Mit (3) kann die Gruppierung wieder aufgehoben werden. Mit (4) werden nur die Media Assets im Anzeige-Bereich angezeigt welche sich in dieser Gruppe befinden.</p>
<p><br>
";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "gruppe.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 26: Funktionen Gruppieren</h6>
<p><br></p>
<p>Die ausgewählten Media Assets (2) können durch Betätigung von (1) gruppiert werden.</p>
<p><br>
";
        // line 11
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "gruppeerstellen.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 27: Gruppe erstellen.</h6>
<p><br></p>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/03.gruppieren";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  26 => 6,  43 => 23,  19 => 1,);
    }
}
