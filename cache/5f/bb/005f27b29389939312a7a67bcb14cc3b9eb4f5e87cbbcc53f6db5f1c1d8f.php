<?php

/* partials/navigation.html.twig */
class __TwigTemplate_5fbb005f27b29389939312a7a67bcb14cc3b9eb4f5e87cbbcc53f6db5f1c1d8f extends Twig_Template
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
        return array (  42 => 7,  32 => 5,  26 => 3,  22 => 2,  19 => 1,  294 => 82,  291 => 81,  286 => 77,  281 => 76,  276 => 78,  273 => 77,  271 => 76,  266 => 75,  263 => 74,  258 => 72,  253 => 64,  245 => 66,  242 => 65,  240 => 64,  232 => 61,  227 => 58,  224 => 57,  220 => 45,  209 => 38,  206 => 37,  203 => 36,  199 => 29,  193 => 27,  190 => 26,  187 => 25,  183 => 36,  179 => 35,  175 => 34,  170 => 33,  159 => 31,  154 => 30,  152 => 25,  147 => 23,  143 => 22,  139 => 21,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  119 => 15,  113 => 13,  110 => 12,  104 => 10,  98 => 8,  96 => 7,  88 => 6,  85 => 5,  82 => 4,  74 => 90,  71 => 89,  69 => 81,  66 => 80,  64 => 74,  61 => 73,  59 => 72,  56 => 71,  54 => 57,  48 => 8,  46 => 52,  40 => 49,  36 => 47,  34 => 4,  29 => 4,  31 => 4,  28 => 3,);
    }
}
