<?php

/* partials/navigation.html.twig */
class __TwigTemplate_739f228896f324998e8c53c1479f90e7f5ff9fa8a4e88c3cbb9a99f31644c809 extends Twig_Template
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
        echo "<ul class=\"navigation\">
    ";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 3
            echo "\t    ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible", array())) {
                // line 4
                echo "\t    \t";
                $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild", array()))) ? ("active") : (""));
                // line 5
                echo "\t    \t<li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
                echo "\">";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu", array());
                echo "</a></li>
\t    ";
            }
            // line 7
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "</ul>                

";
    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 8,  42 => 7,  32 => 5,  29 => 4,  26 => 3,  22 => 2,  19 => 1,  272 => 77,  269 => 76,  264 => 72,  259 => 71,  254 => 70,  249 => 73,  246 => 72,  243 => 71,  241 => 70,  238 => 69,  235 => 68,  228 => 64,  226 => 63,  219 => 59,  215 => 57,  212 => 56,  208 => 44,  197 => 37,  194 => 36,  191 => 35,  187 => 29,  181 => 27,  178 => 26,  175 => 25,  171 => 35,  167 => 34,  162 => 33,  151 => 31,  146 => 30,  144 => 25,  139 => 23,  135 => 22,  131 => 21,  126 => 19,  122 => 18,  118 => 17,  114 => 16,  111 => 15,  105 => 13,  102 => 12,  96 => 10,  90 => 8,  88 => 7,  80 => 6,  77 => 5,  74 => 4,  66 => 82,  63 => 81,  61 => 76,  58 => 75,  55 => 68,  53 => 56,  47 => 52,  45 => 51,  39 => 48,  35 => 46,  33 => 4,  31 => 4,  28 => 1,);
    }
}
