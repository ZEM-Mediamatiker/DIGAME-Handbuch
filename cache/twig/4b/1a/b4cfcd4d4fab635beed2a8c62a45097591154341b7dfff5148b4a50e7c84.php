<?php

/* partials/header.html.twig */
class __TwigTemplate_4b1ab4cfcd4d4fab635beed2a8c62a45097591154341b7dfff5148b4a50e7c84 extends Twig_Template
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
        // line 15
        echo " 
<ol class=\"topics\">
";
        // line 17
        echo $this->getAttribute($this, "loop", array(0 => (isset($context["pages"]) ? $context["pages"] : null)), "method");
        echo "
</ol>





 

";
    }

    // line 1
    public function getloop($__page__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                if ($this->getAttribute($context["p"], "visible", array())) {
                    // line 4
                    echo "<li>
<a href=\"";
                    // line 5
                    echo $this->getAttribute($context["p"], "url", array());
                    echo "\">";
                    echo $this->getAttribute($context["p"], "menu", array());
                    echo "</a>
";
                    // line 6
                    if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                        // line 7
                        echo "<ol>
";
                        // line 8
                        echo $this->getAttribute($this, "loop", array(0 => $context["p"]), "method");
                        echo "
</ol>
";
                    }
                    // line 11
                    echo "</li>
";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
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
        return array (  74 => 11,  68 => 8,  65 => 7,  63 => 6,  57 => 5,  54 => 4,  52 => 3,  48 => 2,  37 => 1,  23 => 17,  19 => 15,);
    }
}
