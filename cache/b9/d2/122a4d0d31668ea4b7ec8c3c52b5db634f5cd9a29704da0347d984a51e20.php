<?php

/* partials/base.html.twig */
class __TwigTemplate_b9d2122a4d0d31668ea4b7ec8c3c52b5db634f5cd9a29704da0347d984a51e20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

      <body>
      
      \t<input type=\"checkbox\" id=\"navbtn\">
      
      \t<header id=\"header\">      \t\t\t
      \t\t\t
      \t\t\t<div id=\"logo\">      \t\t\t
      \t\t\t</div> \t
      \t\t\t
      \t\t\t<div class=\"clearfix\"></div>
      \t\t\t
      \t\t\t<div id=\"title\">
      \t\t\t\t<h3 class=\"header-title\"><a href=\"";
        // line 58
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site"), "title");
        echo "</a></h3>
      \t\t\t</div>\t\t     \t
      \t\t\t
       \t\t\t<div id=\"showLeftPush\" class=\"menu\">
       \t\t\t\t<label id=\"label\" for=\"navbtn\">
       \t\t\t\t<div class=\"menutransform\">
            \t\t\t<div class=\"linie top left\"></div>
           \t\t\t\t<div class=\"linie top right\"></div>
            \t\t\t<div class=\"linie mid left\"></div>
            \t\t\t<div class=\"linie mid right\"></div>  
            \t\t\t<div class=\"linie bottom left\"></div>
            \t\t\t<div class=\"linie bottom right\"></div>  
            \t\t</div> 
            \t\t</label>
        \t\t</div>   \t\t \t\t
      \t</header>
      \t
      \t
      \t
      \t\t<section id=\"sidebar\">
      \t\t\t<div class=\"sidepadding\">
      \t\t\t
      \t\t\t<div class=\"searchwrapper\">
      \t\t\t\t<form method=\"POST\" action=\"";
        // line 81
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche.\" >
      \t\t\t\t</form>\t\t\t\t
      \t\t\t</div>
      \t\t
      \t\t\t";
        // line 87
        echo "        \t\t";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 88
        echo "      \t\t
      \t\t\t</div>
      \t\t</section>
      \t
      \t\t<section id=\"body\" class=\"cbp-spmenu-push\">
      \t\t\t<div class=\"padding\">
      \t\t
      \t\t\t";
        // line 95
        $this->displayBlock('content', $context, $blocks);
        // line 96
        echo "      \t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t";
        // line 99
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy.category" => "digame"), "order" => array("by" => "default", "dir" => "asc"))), "method");
        // line 100
        echo "      \t\t\t
      \t\t\t<div id=\"navigation\">
      \t\t\t
      \t\t\t\t";
        // line 103
        if ((!$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path")), "method"))) {
            // line 104
            echo "      \t\t\t\t<a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path")), "method"), "url");
            echo "\"><i class=\"icon-navigation-arrows\">&#59237;</i></a>
      \t\t\t\t";
        }
        // line 106
        echo "      \t\t\t\t
      \t\t\t\t";
        // line 107
        if ((!$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path")), "method"))) {
            // line 108
            echo "      \t\t\t\t<a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path")), "method"), "url");
            echo "\"><i class=\"icon-navigation-arrows\">&#59238;</i></a>
      \t\t\t\t";
        }
        // line 110
        echo "      \t\t\t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t</section>     

        ";
        // line 118
        echo "        ";
        // line 119
        echo "        ";
        // line 120
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>       
        <script src=\"";
        // line 121
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        
        <script src=\"";
        // line 123
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/classie.js\"></script>
\t\t<script>
\t\t\tvar menuLeft = document.getElementById( 'sidebar' ),
\t\t\t\tbodyContainer = document.getElementById( 'body' ),
\t\t\t\tshowLeftPush = document.getElementById( 'showLeftPush' ),

\t\t\t\tbody = document.body;\t\t\t
\t
\t\t\tshowLeftPush.onclick = function() {
\t\t\t\tclassie.toggle( this, 'active' );
\t\t\t\tclassie.toggle( bodyContainer, 'cbp-spmenu-push-toright' );
\t\t\t\tclassie.toggle( menuLeft, 'cbp-spmenu-open' );
\t\t\t\tdisableOther( 'showLeftPush' );
\t\t\t};
\t

\t\t\tfunction disableOther( button ) {\t
\t\t\t\tif( button !== 'showLeftPush' ) {
\t\t\t\t\tclassie.toggle( showLeftPush, 'disabled' );
\t\t\t\t}
\t\t\t\t
\t\t\t}
\t\t</script>
\t\t<script>
\t\t\tfunction onSearch(form) {
    \t\t\tform.action += form.querySelector('#searchfield').value;
\t\t\t}
\t\t</script>
        
    </body>
</html>";
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
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description")) {
            // line 9
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description");
            echo "\">
        ";
        } else {
            // line 11
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description");
            echo "\">
        ";
        }
        // line 13
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots")) {
            // line 14
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots");
            echo "\">
        ";
        }
        // line 16
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 18
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title")) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title");
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title");
        echo "</title>

        ";
        // line 21
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\">

        ";
        // line 24
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap-custom.css\" rel=\"stylesheet\">
        
        
        <link rel=\"apple-touch-icon\" href=\"";
        // line 27
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 28
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-57x57.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-60x60.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-72x72.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 31
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-76x76.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-114x114.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-120x120.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 34
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-144x144.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 35
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-152x152.png\" />
        

        ";
        // line 39
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 95
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
        return array (  286 => 95,  278 => 39,  272 => 35,  268 => 34,  264 => 33,  260 => 32,  256 => 31,  252 => 30,  248 => 29,  244 => 28,  240 => 27,  233 => 24,  227 => 21,  218 => 18,  212 => 16,  206 => 14,  203 => 13,  197 => 11,  191 => 9,  189 => 8,  184 => 5,  181 => 4,  146 => 123,  141 => 121,  138 => 120,  136 => 119,  134 => 118,  125 => 110,  119 => 108,  117 => 107,  114 => 106,  108 => 104,  106 => 103,  101 => 100,  99 => 99,  94 => 96,  92 => 95,  83 => 88,  80 => 87,  72 => 81,  44 => 58,  28 => 44,  26 => 4,  21 => 1,);
    }
}
