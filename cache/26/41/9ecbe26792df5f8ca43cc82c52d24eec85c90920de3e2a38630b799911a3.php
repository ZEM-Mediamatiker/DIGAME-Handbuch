<?php

/* partials/base.html.twig */
class __TwigTemplate_26419ecbe26792df5f8ca43cc82c52d24eec85c90920de3e2a38630b799911a3 extends Twig_Template
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
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
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
        // line 46
        echo "
</head>
<body id=\"top\" class=\"";
        // line 48
        echo $this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "body_classes", array());
        echo "\">
    <nav class=\"pushy pushy-left\">
        <div id=\"panel\">
        ";
        // line 51
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 52
        echo "        </div>
    </nav>
    <div class=\"site-overlay\"></div>
    <div id=\"container\">
        ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 68
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 81
        echo "    </div>
    <script src=\"";
        // line 82
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
        echo "/js/modernizr.custom.71422.js\"></script>
    ";
        // line 35
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

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        if ($this->getAttribute($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "lightbox", array())) {
            // line 37
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
        // line 44
        echo "    ";
    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        // line 57
        echo "        <header id=\"header\">
                <div class=\"logo-surround\">
                    <a href=\"";
        // line 59
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\" id=\"logo\"></a>
                    <span class=\"logo-accent\"></span>
                </div>
                <div id=\"navbar\">
                    ";
        // line 63
        $this->env->loadTemplate("partials/navigation.html.twig")->display($context);
        // line 64
        echo "                    <span class=\"panel-activation menu-btn\">&#9776;</span>
                </div>
        </header>
        ";
    }

    // line 68
    public function block_body($context, array $blocks = array())
    {
        // line 69
        echo "        <section id=\"body\">
            ";
        // line 70
        $this->displayBlock('sidebar', $context, $blocks);
        // line 71
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 72
        echo "            ";
        $this->displayBlock('pagination', $context, $blocks);
        // line 73
        echo "        </section>
        ";
    }

    // line 70
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
    }

    // line 72
    public function block_pagination($context, array $blocks = array())
    {
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "        <footer id=\"footer\">
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
        return array (  272 => 77,  269 => 76,  264 => 72,  259 => 71,  254 => 70,  249 => 73,  246 => 72,  243 => 71,  241 => 70,  238 => 69,  235 => 68,  228 => 64,  226 => 63,  219 => 59,  215 => 57,  212 => 56,  208 => 44,  197 => 37,  194 => 36,  191 => 35,  187 => 29,  181 => 27,  178 => 26,  175 => 25,  171 => 35,  167 => 34,  162 => 33,  151 => 31,  146 => 30,  144 => 25,  139 => 23,  135 => 22,  131 => 21,  126 => 19,  122 => 18,  118 => 17,  114 => 16,  111 => 15,  105 => 13,  102 => 12,  96 => 10,  90 => 8,  88 => 7,  80 => 6,  77 => 5,  74 => 4,  66 => 82,  63 => 81,  61 => 76,  58 => 75,  55 => 68,  53 => 56,  47 => 52,  45 => 51,  39 => 48,  35 => 46,  33 => 4,  31 => 4,  28 => 1,);
    }
}
