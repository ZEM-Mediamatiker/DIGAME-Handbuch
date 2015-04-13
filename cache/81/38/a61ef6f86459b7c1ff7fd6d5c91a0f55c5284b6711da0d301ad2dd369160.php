<?php

/* partials/base.html.twig */
class __TwigTemplate_8138a61ef6f86459b7c1ff7fd6d5c91a0f55c5284b6711da0d301ad2dd369160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'header' => array($this, 'block_header'),
            'header_extra' => array($this, 'block_header_extra'),
            'showcase' => array($this, 'block_showcase'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'pagination' => array($this, 'block_pagination'),
            'footer' => array($this, 'block_footer'),
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
        // line 47
        echo "
</head>
<body id=\"top\" class=\"";
        // line 49
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <nav class=\"pushy pushy-left\">
        <div id=\"panel\">
        ";
        // line 52
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 53
        echo "        </div>
    </nav>
    <div class=\"site-overlay\"></div>
    <div id=\"container\">
        ";
        // line 57
        $this->displayBlock('header', $context, $blocks);
        // line 71
        echo "
        ";
        // line 72
        $this->displayBlock('showcase', $context, $blocks);
        // line 73
        echo "
        ";
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 80
        echo "
        ";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 89
        echo "    </div>
    <script src=\"";
        // line 90
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/pushy.min.js\"></script>
</body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 6
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>
    ";
        // line 7
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 8
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
    ";
        } else {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
    ";
        }
        // line 12
        echo "    ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 13
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
    ";
        }
        // line 15
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 16
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css-compiled/nucleus.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css-compiled/template.css\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/font-awesome.min.css\" type=\"text/css\" />
    <!--[if (gte IE 8)&(lte IE 9)]>
        <script type=\"text/javascript\" src=\"";
        // line 21
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/html5shiv-printshiv.min.js\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/nucleus-ie9.css\" type=\"text/css\" />
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/pure-0.5.0/grids-min.css\" type=\"text/css\" />
    <![endif]-->
    ";
        // line 25
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stylesheets"]) ? $context["stylesheets"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 31
            echo "        <link rel=\"stylesheet\" href=\"";
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
        echo "    <script src=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/jquery-2.1.1.min.js\"></script>
    <script src=\"";
        // line 34
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/nova-theme.js\"></script>
    <script src=\"";
        // line 35
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.custom.71422.js\"></script>
    ";
        // line 36
        $this->displayBlock('javascripts', $context, $blocks);
    }

    // line 25
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 26
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 27
            echo "        <link rel=\"stylesheet\" href=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/css/featherlight.min.css\" />
        ";
        }
        // line 29
        echo "    ";
    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        // line 37
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 38
            echo "        <script src=\"";
            echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
            echo "/js/featherlight.min.js\"></script>
        <script>
        \$(function () {
            \$('a[rel=\"lightbox\"]').featherlight();
        });
        </script>
        ";
        }
        // line 45
        echo "    ";
    }

    // line 57
    public function block_header($context, array $blocks = array())
    {
        // line 58
        echo "        <header id=\"header\">

                <div id=\"logo\">
                    <h3><a href=\"";
        // line 61
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
                </div>
                <div id=\"navbar\">
                    ";
        // line 64
        $this->displayBlock('header_extra', $context, $blocks);
        // line 65
        echo "                    ";
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 66
        echo "                    <span class=\"panel-activation menu-btn\">&#9776;</span>
                </div>

        </header>
        ";
    }

    // line 64
    public function block_header_extra($context, array $blocks = array())
    {
    }

    // line 72
    public function block_showcase($context, array $blocks = array())
    {
    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        // line 75
        echo "        <section id=\"body\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
            ";
        // line 76
        $this->displayBlock('content', $context, $blocks);
        // line 77
        echo "            ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 78
        echo "        </section>
        ";
    }

    // line 76
    public function block_content($context, array $blocks = array())
    {
    }

    // line 77
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "        <footer id=\"footer\">
            <div class=\"totop\">
                <span><a href=\"#\" id=\"toTop\"><i class=\"fa fa-arrow-up\"></i></a></span>
            </div>
            <p><a href=\"http://getgrav.org\">Grav</a> was <i class=\"fa fa-code\"></i> with <i class=\"fa fa-heart\"></i> by <a href=\"http://www.rockettheme.com\">RocketTheme</a>.</p>
        </footer>
        ";
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
        return array (  294 => 82,  291 => 81,  286 => 77,  281 => 76,  276 => 78,  273 => 77,  271 => 76,  266 => 75,  263 => 74,  258 => 72,  253 => 64,  245 => 66,  242 => 65,  240 => 64,  232 => 61,  227 => 58,  224 => 57,  220 => 45,  209 => 38,  206 => 37,  203 => 36,  199 => 29,  193 => 27,  190 => 26,  187 => 25,  183 => 36,  179 => 35,  175 => 34,  170 => 33,  159 => 31,  154 => 30,  152 => 25,  147 => 23,  143 => 22,  139 => 21,  134 => 19,  130 => 18,  126 => 17,  122 => 16,  119 => 15,  113 => 13,  110 => 12,  104 => 10,  98 => 8,  96 => 7,  88 => 6,  85 => 5,  82 => 4,  74 => 90,  71 => 89,  69 => 81,  66 => 80,  64 => 74,  61 => 73,  59 => 72,  56 => 71,  54 => 57,  48 => 53,  46 => 52,  40 => 49,  36 => 47,  34 => 4,  29 => 1,  31 => 4,  28 => 3,);
    }
}
