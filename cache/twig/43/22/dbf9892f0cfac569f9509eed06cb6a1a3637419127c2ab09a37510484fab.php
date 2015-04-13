<?php

/* partials/simplesearch_item.html.twig */
class __TwigTemplate_4322dbf9892f0cfac569f9509eed06cb6a1a3637419127c2ab09a37510484fab extends Twig_Template
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
        echo "<section class=\"search-row\">

    ";
        // line 3
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "media", array()), "images", array()));
        // line 4
        echo "
    ";
        // line 5
        if ((isset($context["banner"]) ? $context["banner"] : null)) {
            // line 6
            echo "    <div class=\"search-image\">
        <img src=\"";
            // line 7
            echo $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "cropZoom", array(0 => 100, 1 => 100), "method");
            echo "\" />
    </div>
    ";
        }
        // line 10
        echo "    <div class=\"search-item\">
        <div class=\"search-title\">
            <h3><a href=\"";
        // line 12
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array());
        echo "</a></h3>
        </div>

        <div class=\"search-details\">
            <span class=\"search-date\">";
        // line 16
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()));
        echo "</span>
        </div>

        <p>";
        // line 19
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "summary", array());
        echo "</p>

        <hr />
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "partials/simplesearch_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 19,  52 => 16,  43 => 12,  39 => 10,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
