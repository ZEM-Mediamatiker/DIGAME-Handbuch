<?php

/* partials/base.html.twig */
class __TwigTemplate_e404f631c72fd231080471e32fe7da06e22521eb8b1b06a76149933eb5fc628f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 44
        echo "    </head>

      <body class=\"";
        // line 46
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">

        ";
        // line 49
        echo "        ";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 50
        echo "
        ";
        // line 51
        $this->displayBlock('content', $context, $blocks);
        // line 52
        echo "
        <div class=\"footer\">
            <div class=\"container\">
                <p class=\"text-muted\">Bootstrap Theme for <a href=\"http://getgrav.org\">Grav</a></p>
            </div>
        </div>
    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 8
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 21
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">


        ";
        // line 25
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/font-awesome.min.css\" rel=\"stylesheet\">

        ";
        // line 28
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css-compiled/theme.css\" rel=\"stylesheet\">

        ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) ? $context["stylesheets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 31
            echo "            <link rel=\"stylesheet\" href=\"";
            echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
            echo "/";
            echo (isset($context["stylesheet"]) ? $context["stylesheet"] : null);
            echo "\" type=\"text/css\" />
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <script src=\"";
        // line 34
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/jquery-2.1.1.min.js\"></script>
        <script src=\"";
        // line 35
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.custom.71422.js\"></script>
        <script src=\"";
        // line 36
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        ";
        // line 38
        echo "        <!--[if lt IE 9]>
        <script src=\"";
        // line 39
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/html5shiv-printshiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
        // line 42
        $this->displayBlock('javascripts', $context, $blocks);
        // line 43
        echo "        ";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 51
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 51,  168 => 42,  164 => 43,  162 => 42,  156 => 39,  153 => 38,  149 => 36,  145 => 35,  141 => 34,  138 => 33,  127 => 31,  123 => 30,  117 => 28,  111 => 25,  104 => 21,  95 => 18,  89 => 16,  83 => 14,  80 => 13,  74 => 11,  68 => 9,  66 => 8,  61 => 5,  58 => 4,  46 => 52,  44 => 51,  41 => 50,  38 => 49,  33 => 46,  29 => 44,  27 => 4,  22 => 1,  34 => 5,  31 => 4,  28 => 3,);
    }
}
