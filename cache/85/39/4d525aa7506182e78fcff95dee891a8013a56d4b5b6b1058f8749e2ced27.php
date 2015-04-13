<?php

/* partials/header.html.twig */
class __TwigTemplate_85394d525aa7506182e78fcff95dee891a8013a56d4b5b6b1058f8749e2ced27 extends Twig_Template
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



<!--<nav class=\"\" role=\"navigation\">       
        
            <ol class=\"\">
                ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 26
            echo "                ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible")) {
                // line 27
                echo "                ";
                $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild"))) ? ("active") : (""));
                // line 28
                echo "                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu");
                echo "</a></li>
                ";
            }
            // line 30
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
                         
                           \t          
            </ol>
       
   
</nav>-->



<!-- 

<nav class=\"navbar navbar-default navbar-inverse navbar-static-top\" role=\"navigation\">
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
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["pages"]) ? $context["pages"] : null), "children"));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 56
            echo "                ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "visible")) {
                // line 57
                echo "                ";
                $context["current_page"] = ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "active") || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "activeChild"))) ? ("active") : (""));
                // line 58
                echo "                <li class=\"";
                echo (isset($context["current_page"]) ? $context["current_page"] : null);
                echo "\"><a href=\"";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url");
                echo "\">";
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "menu");
                echo "</a></li>
                ";
            }
            // line 60
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            </ul>
        </div>
    </div>
</nav> 

 -->  

";
    }

    // line 1
    public function getloop($_page = null)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $_page,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "children"));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 3
                if ($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "visible")) {
                    // line 4
                    echo "<li>
<a href=\"";
                    // line 5
                    echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "url");
                    echo "\">";
                    echo $this->getAttribute((isset($context["p"]) ? $context["p"] : null), "menu");
                    echo "</a>
";
                    // line 6
                    if (($this->getAttribute($this->getAttribute((isset($context["p"]) ? $context["p"] : null), "children"), "count") > 0)) {
                        // line 7
                        echo "<ol>
";
                        // line 8
                        echo $this->getAttribute($this, "loop", array(0 => (isset($context["p"]) ? $context["p"] : null)), "method");
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
        return array (  160 => 11,  154 => 8,  151 => 7,  149 => 6,  143 => 5,  140 => 4,  138 => 3,  134 => 2,  123 => 1,  112 => 61,  106 => 60,  96 => 58,  93 => 57,  90 => 56,  86 => 55,  54 => 30,  44 => 28,  41 => 27,  38 => 26,  34 => 25,  23 => 17,  19 => 15,);
    }
}
