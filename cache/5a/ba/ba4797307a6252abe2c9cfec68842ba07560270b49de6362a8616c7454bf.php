<?php

/* partials/header.html.twig */
class __TwigTemplate_5ababa4797307a6252abe2c9cfec68842ba07560270b49de6362a8616c7454bf extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\">Grav</a>
        </div>
        <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 15
            echo "                ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible", array())) {
                // line 16
                echo "                ";
                $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild", array()))) ? ("active") : (""));
                // line 17
                echo "                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
                echo "</a></li>
                ";
            }
            // line 19
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            </ul>
        </div>
    </div>
</nav>   ";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 19,  44 => 17,  38 => 15,  19 => 1,  133 => 40,  125 => 27,  119 => 24,  113 => 21,  104 => 18,  98 => 16,  92 => 14,  89 => 13,  83 => 11,  77 => 9,  75 => 8,  70 => 5,  67 => 4,  60 => 20,  57 => 52,  55 => 51,  53 => 50,  43 => 41,  41 => 16,  37 => 38,  34 => 14,  26 => 4,  21 => 1,  31 => 4,  28 => 32,);
    }
}
