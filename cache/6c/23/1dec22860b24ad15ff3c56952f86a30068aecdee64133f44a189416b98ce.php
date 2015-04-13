<?php

/* partials/simplesearch_base.html.twig */
class __TwigTemplate_6c231dec22860b24ad15ff3c56952f86a30068aecdee64133f44a189416b98ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("partials/base.html.twig");

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  64 => 10,  61 => 9,  44 => 8,  35 => 6,  31 => 4,  28 => 3,  25 => 5,  34 => 11,  26 => 6,  43 => 23,  19 => 1,);
    }
}
