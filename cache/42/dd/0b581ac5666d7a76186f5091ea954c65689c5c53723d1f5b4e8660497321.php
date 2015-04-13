<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/04.stichworte */
class __TwigTemplate_42dd0b581ac5666d7a76186f5091ea954c65689c5c53723d1f5b4e8660497321 extends Twig_Template
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
        echo "<h2>Stichworte</h2>
<hr />
<p>Einem Media Asset können Stichworte innerhalb des Stichwortbaumes (1) zugewiesen werden. Die Zuweisung wird mit einem Häkchen angezeigt. Ein weisses Häkchen zeigt, dass das Media Asset genau diesem Stichwort zugeordnet wurde. Ein graues Häkchen zeigt, dass das Media Asset in diesem Zweig des Baumes einem Stichwort zugeordnet wurde.
Mit (2) kann eine Zuweisung gespeichert werden. Mit (3) gehen die nicht gespeicherten Zuweisungen verloren.</p>
<p><br>
";
        // line 6
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "functions.png", array(), "array"), "html", array(), "method");
        echo "</p>
<h6>Bild 28: Funktionen Stichworte</h6>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/03.anwenderfunktionen/05.bearbeiten/04.stichworte";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }
}
