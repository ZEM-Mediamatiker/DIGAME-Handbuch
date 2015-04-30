<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/plugins/error/pages */
class __TwigTemplate_f72687759dcf2ef89610abbeeeea0b4d752defd09aa6c8384b230a9ca6197fd4 extends Twig_Template
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
        echo "<p>Woops. Scheint, als würde diese Seite nicht existieren. <br><a href=\"/digame\">Schnell zurück zur Startseite</a></p>";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/plugins/error/pages";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
