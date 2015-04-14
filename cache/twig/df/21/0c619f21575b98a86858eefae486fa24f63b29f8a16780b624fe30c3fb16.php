<?php

/* partials/base.html.twig */
class __TwigTemplate_df210c619f21575b98a86858eefae486fa24f63b29f8a16780b624fe30c3fb16 extends Twig_Template
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
        // line 45
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
        // line 59
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
      \t\t\t</div>
      \t\t\t
      \t\t\t<a class=\"print\" href=\"javascript:window.print()\">
      \t\t\t<div id=\"print_icon\">
      \t\t\t\t<div class=\"menutransform2\">
            \t\t\t 
            \t\t</div>
      \t\t\t</div> 
      \t\t\t</a> \t\t\t\t     \t
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
        // line 90
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche.\" >
      \t\t\t\t</form>\t\t\t\t
      \t\t\t</div>
      \t\t
      \t\t\t";
        // line 96
        echo "        \t\t";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 97
        echo "        \t\t
        \t\t
      \t\t
      \t\t\t</div>
      \t\t\t<div class=\"clearfix\"></div>
      \t\t\t<div class=\"copywrapper\">
      \t\t\t\t&copy; 2015 | <a href=\"http://zem.ch\" target=\"_blank\" alt=\"Zentrum elektronische Medien\">Zentrum elektronische Medien</a><br>
      \t\t\t\tVersion: 2.0\t
      \t\t\t</div>
      \t\t</section>
      \t
      \t\t<section id=\"content\" class=\"cbp-spmenu-push\">
      \t\t\t<div class=\"padding\">
      \t\t
      \t\t\t";
        // line 111
        $this->displayBlock('content', $context, $blocks);
        // line 112
        echo "      \t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t";
        // line 115
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy.category" => "digame"), "order" => array("by" => "default", "dir" => "asc"))), "method");
        // line 116
        echo "      \t\t\t
      \t\t\t<div id=\"navigation\">
      \t\t\t
      \t\t\t\t";
        // line 119
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 120
            echo "      \t\t\t\t<a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59237;</i></a>
      \t\t\t\t";
        }
        // line 122
        echo "      \t\t\t\t
      \t\t\t\t";
        // line 123
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 124
            echo "      \t\t\t\t<a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59238;</i></a>
      \t\t\t\t";
        }
        // line 126
        echo "      \t\t\t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t<div class=\"clearfix\"></div>
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t</section>     

        ";
        // line 138
        echo "        ";
        // line 139
        echo "        ";
        // line 140
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>       
        <script src=\"";
        // line 141
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        
        <script src=\"";
        // line 143
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/classie.js\"></script>
\t\t<script>
\t\t\tvar menuLeft = document.getElementById( 'sidebar' ),
\t\t\t\tbodyContainer = document.getElementById( 'content' ),
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
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">

        ";
        // line 24
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/print.css\" rel=\"stylesheet\" media=\"print\">
        <link href=\"";
        // line 25
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap-custom.css\" rel=\"stylesheet\" media=\"screen\">
        
        
        <link rel=\"apple-touch-icon\" href=\"";
        // line 28
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-57x57.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-60x60.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 31
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-72x72.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-76x76.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-114x114.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 34
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-120x120.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 35
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-144x144.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 36
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-152x152.png\" />
        

        ";
        // line 40
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 111
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
        return array (  309 => 111,  301 => 40,  295 => 36,  291 => 35,  287 => 34,  283 => 33,  279 => 32,  275 => 31,  271 => 30,  267 => 29,  263 => 28,  257 => 25,  252 => 24,  246 => 21,  237 => 18,  231 => 16,  225 => 14,  222 => 13,  216 => 11,  210 => 9,  208 => 8,  203 => 5,  200 => 4,  165 => 143,  160 => 141,  157 => 140,  155 => 139,  153 => 138,  140 => 126,  134 => 124,  132 => 123,  129 => 122,  123 => 120,  121 => 119,  116 => 116,  114 => 115,  109 => 112,  107 => 111,  91 => 97,  88 => 96,  80 => 90,  44 => 59,  28 => 45,  26 => 4,  21 => 1,);
    }
}
