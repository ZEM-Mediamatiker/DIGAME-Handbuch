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
        echo "<!-- AAARGH! -->
<!DOCTYPE html>
<html lang=\"en\">
    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 46
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
        // line 60
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
        // line 91
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche.\" >
      \t\t\t\t</form>\t\t\t\t
      \t\t\t</div>
      \t\t
      \t\t\t";
        // line 97
        echo "        \t\t";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 98
        echo "        \t\t
        \t\t<div class=\"copywrapper\">
      \t\t\t\t&copy; 2015 | <a href=\"http://zem.ch\" target=\"_blank\" alt=\"Zentrum elektronische Medien\">Zentrum elektronische Medien</a><br>
      \t\t\t\tVersion: 6.2\t
      \t\t\t</div>
      \t\t
      \t\t\t</div>
      \t\t</section>
      \t
      \t\t<section id=\"body\" class=\"cbp-spmenu-push\">
      \t\t\t<div class=\"padding\">
      \t\t
      \t\t\t";
        // line 110
        $this->displayBlock('content', $context, $blocks);
        // line 111
        echo "      \t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t";
        // line 114
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy.category" => "digame"), "order" => array("by" => "default", "dir" => "asc"))), "method");
        // line 115
        echo "      \t\t\t
      \t\t\t<div id=\"navigation\">
      \t\t\t
      \t\t\t\t";
        // line 118
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 119
            echo "      \t\t\t\t<a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59237;</i></a>
      \t\t\t\t";
        }
        // line 121
        echo "      \t\t\t\t
      \t\t\t\t";
        // line 122
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 123
            echo "      \t\t\t\t<a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59238;</i></a>
      \t\t\t\t";
        }
        // line 125
        echo "      \t\t\t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t</section>     

        ";
        // line 135
        echo "        ";
        // line 136
        echo "        ";
        // line 137
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>       
        <script src=\"";
        // line 138
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        
        <script src=\"";
        // line 140
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

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array())) {
            // line 10
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "description", array());
            echo "\">
        ";
        } else {
            // line 12
            echo "        <meta name=\"description\" content=\"";
            echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description", array());
            echo "\">
        ";
        }
        // line 14
        echo "        ";
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 15
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 17
        echo "        <link rel=\"icon\" type=\"image/png\" href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/favicon.png\">

        <title>";
        // line 19
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 22
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">

        ";
        // line 25
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/print.css\" rel=\"stylesheet\" media=\"print\">
        <link href=\"";
        // line 26
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap-custom.css\" rel=\"stylesheet\" media=\"screen\">
        
        
        <link rel=\"apple-touch-icon\" href=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-57x57.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 31
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-60x60.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-72x72.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-76x76.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 34
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-114x114.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 35
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-120x120.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 36
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-144x144.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 37
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-152x152.png\" />
        

        ";
        // line 41
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 110
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
        return array (  306 => 110,  298 => 41,  292 => 37,  288 => 36,  284 => 35,  280 => 34,  276 => 33,  272 => 32,  268 => 31,  264 => 30,  260 => 29,  254 => 26,  249 => 25,  243 => 22,  234 => 19,  228 => 17,  222 => 15,  219 => 14,  213 => 12,  207 => 10,  205 => 9,  200 => 6,  197 => 5,  162 => 140,  157 => 138,  154 => 137,  152 => 136,  150 => 135,  139 => 125,  133 => 123,  131 => 122,  128 => 121,  122 => 119,  120 => 118,  115 => 115,  113 => 114,  108 => 111,  106 => 110,  92 => 98,  89 => 97,  81 => 91,  45 => 60,  29 => 46,  27 => 5,  21 => 1,);
    }
}
