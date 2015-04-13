<?php

/* partials/header.html.twig */
class __TwigTemplate_8d543574ea007f7b6f8154ab290aca5c892f892bfc241de2043f79acdc063e33 extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\">
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
</nav>
";
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
        return array (  60 => 20,  54 => 19,  19 => 1,  173 => 51,  168 => 42,  164 => 43,  162 => 42,  156 => 39,  153 => 38,  149 => 36,  145 => 35,  141 => 34,  138 => 33,  127 => 31,  123 => 30,  117 => 28,  111 => 25,  104 => 21,  95 => 18,  89 => 16,  83 => 14,  80 => 13,  74 => 11,  68 => 9,  66 => 8,  61 => 5,  58 => 4,  46 => 52,  44 => 17,  41 => 16,  38 => 15,  33 => 46,  29 => 44,  27 => 4,  22 => 1,  34 => 14,  31 => 4,  28 => 3,);
    }
}
