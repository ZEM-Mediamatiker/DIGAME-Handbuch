<?php

/* partials/simplesearch_item.html.twig */
class __TwigTemplate_c3a56e35a53f2a6112a5d9fe7b54ad25920fba0ebd9caa59f94b10204fad974d extends Twig_Template
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
        <a href=\"";
            // line 7
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "url", array());
            echo "\"><img src=\"";
            echo $this->getAttribute((isset($context["banner"]) ? $context["banner"] : null), "cropZoom", array(0 => 100, 1 => 100), "method");
            echo "\" /></a>
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
        echo twig_date_format_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date", array()), $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "system", array()), "pages", array()), "dateformat", array()), "short", array()));
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
        return array (  60 => 19,  54 => 16,  45 => 12,  41 => 10,  33 => 7,  30 => 6,  28 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
