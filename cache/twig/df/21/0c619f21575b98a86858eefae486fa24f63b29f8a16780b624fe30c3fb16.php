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
      \t
      \t<section id=\"page\">
      \t
      \t
      \t\t<header id=\"header\">      \t\t\t
      \t\t\t
      \t\t\t<div id=\"logo\">      \t\t\t
      \t\t\t</div> \t
      \t\t\t
      \t\t\t
      \t\t\t
      \t\t\t<div id=\"title\">
      \t\t\t\t<h3 class=\"header-title\"><a href=\"";
        // line 62
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
      \t\t\t</div>
      \t\t\t
      \t\t\t<a class=\"print\" href=\"javascript:window.print()\">
      \t\t\t<div id=\"print_icon\">
      \t\t\t\t<div class=\"menutransform2\">            \t\t\t 
            \t\t</div>
      \t\t\t</div> 
      \t\t\t</a> 
      \t\t\t
      \t\t\t<div id=\"showSearchOverlay\" class=\"search_icon\">
      \t\t\t\t<div class=\"menutransform3\"> 
      \t\t\t\t\t          \t\t\t 
            \t\t</div>
      \t\t\t</div> \t\t\t\t     \t
      \t\t\t
       \t\t\t   \t\t \t\t
      \t\t</header>
      \t\t
      \t\t<div class=\"clearfix\"></div>
      \t\t
      \t\t<section id=\"content\">
      \t\t\t<div class=\"padding\">
      \t\t
      \t\t\t";
        // line 86
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "      \t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t";
        // line 90
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy.category" => "digame"), "order" => array("by" => "default", "dir" => "asc"))), "method");
        // line 91
        echo "      \t\t\t
      \t\t\t<div id=\"navigation\">
      \t\t\t
      \t\t\t\t";
        // line 94
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 95
            echo "      \t\t\t\t<a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59237;</i></a>
      \t\t\t\t";
        }
        // line 97
        echo "      \t\t\t\t
      \t\t\t\t";
        // line 98
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 99
            echo "      \t\t\t\t<a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59238;</i></a>
      \t\t\t\t";
        }
        // line 101
        echo "      \t\t\t\t
      \t\t\t</div>
      \t\t\t
      \t\t\t<div class=\"clearfix\"></div>
      \t\t\t  \t\t\t
      \t\t</section>
      \t\t
      \t\t<div class=\"clearfix\"></div>
      \t
      \t
      \t</section>
      \t
      \t<section id=\"menu-overlay\">
      \t\t
      \t\t<section id=\"menucontainer\">
      \t\t
      \t\t\t<div id=\"menu-navigation\">
      \t\t\t\t
      \t\t\t\t";
        // line 120
        echo "        \t\t\t";
        $this->env->loadTemplate("partials/header.html.twig")->display($context);
        // line 121
        echo "        \t\t\t<div class=\"clearfix\"></div>
      \t\t\t
      \t\t\t
      \t\t\t</div>
      \t\t
      \t\t
      \t\t</section>    \t
      \t
      \t</section>
      \t
      \t
      \t<section id=\"search-overlay\">
      \t\t
      \t\t<section id=\"searchcontainer\">
      \t\t
      \t\t\t<p class=\"searchdescription\">Geben Sie einen Suchbegriff ein</p>      \t\t
      \t\t
      \t\t\t<div id=\"search-searchconatiner\">
      \t\t\t\t
      \t\t\t\t<form method=\"POST\" action=\"";
        // line 140
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche...\" required>
      \t\t\t\t\t<input type=\"submit\" value=\" \">
      \t\t\t\t</form>
      \t\t\t\t
      \t\t\t</div>     \t\t\t    \t\t
      \t\t
      \t\t</section>
      \t\t
      \t\t<div id=\"closeSearchOverlay\" class=\"searchmenubutton\">
       \t\t\t\t<div class=\"menutransform\">
            \t\t<div class=\"linie top left\"></div>
           \t\t\t<div class=\"linie top right\"></div> 
            \t\t<div class=\"linie bottom left\"></div>
            \t\t<div class=\"linie bottom right\"></div>  
            \t</div> 
            </div>
            
           
      \t\t
      \t
      \t</section>
      \t     \t
      \t<div id=\"showOverlay\" class=\"menu\">
       \t\t<label id=\"label\" for=\"navbtn\">
       \t\t\t<div class=\"menutransform\">
            \t\t<div class=\"linie top left\"></div>
           \t\t\t<div class=\"linie top right\"></div>
            \t\t<div class=\"linie mid left\"></div>
            \t\t<div class=\"linie mid right\"></div>  
            \t\t<div class=\"linie bottom left\"></div>
            \t\t<div class=\"linie bottom right\"></div>  
            \t</div> 
            </label>
        </div>
        
        
      \t
      \t<!--<div class=\"copywrapper\">
      \t\t\t\t&copy; 2015 | <a href=\"http://zem.ch\" target=\"_blank\" alt=\"Zentrum elektronische Medien\">Zentrum elektronische Medien</a><br>
      \t\t\t\tVersion: 2.0\t
      \t\t\t</div>-->
      \t\t\t
\t\t<!--<div class=\"searchwrapper\">
      \t\t\t\t<form method=\"POST\" action=\"";
        // line 184
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche.\" >
      \t\t\t\t</form>\t\t\t\t
      \t\t\t</div>-->
      
      \t
      \t
      \t
      \t
      \t\t
      \t
      \t\t     

        ";
        // line 198
        echo "        ";
        // line 199
        echo "        ";
        // line 200
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>       
        <script src=\"";
        // line 201
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        
        <script src=\"";
        // line 203
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/classie.js\"></script>
\t\t<script>
\t\t\tvar overlay = document.getElementById( 'menu-overlay' ),
\t\t\t\tbodyContainer = document.getElementById( 'page' ),
\t\t\t\tshowOverlay = document.getElementById( 'showOverlay' ),

\t\t\t\tbody = document.body;\t\t\t
\t
\t\t\tshowOverlay.onclick = function() {
\t\t\t\tclassie.toggle( this, 'active' );
\t\t\t\tclassie.toggle( bodyContainer, 'fixbody' );
\t\t\t\tclassie.toggle( overlay, 'open-overlay' );
\t\t\t\tdisableOther( 'showOverlay' );
\t\t\t};
\t

\t\t\tfunction disableOther( button ) {\t
\t\t\t\tif( button !== 'showOverlay' ) {
\t\t\t\t\tclassie.toggle( showOverlay, 'disabled' );
\t\t\t\t}
\t\t\t\t
\t\t\t}
\t\t</script>
\t\t<script>
\t\t\tvar searchoverlay = document.getElementById( 'search-overlay' ),
\t\t\t\tbodyContainer = document.getElementById( 'page' ),
\t\t\t\tshowSearchOverlay = document.getElementById( 'showSearchOverlay' );
\t\t\t
\t
\t\t\tshowSearchOverlay.onclick = function() {
\t\t\t\tclassie.toggle( this, 'active' );
\t\t\t\tclassie.toggle( bodyContainer, 'fixbody' );
\t\t\t\tclassie.toggle( searchoverlay, 'open-searchoverlay' );
\t\t\t\t
\t\t\t\tdisableOther( 'showSearchOverlay' );
\t\t\t};
\t

\t\t\tfunction disableOther( button ) {\t
\t\t\t\tif( button !== 'showSearchOverlay' ) {
\t\t\t\t\tclassie.toggle( showOverlay, 'disabled' );
\t\t\t\t}
\t\t\t\t
\t\t\t}
\t\t</script>
\t\t
\t\t<script>
\t\t\t\$('#showSearchOverlay').on('click', function(){
\t\t\t\t\$('#searchfield').focus();
\t\t\t});
\t\t\t\$('#closeSearchOverlay').on('click', function(){
    \t\t\$('#search-overlay').removeClass('open-searchoverlay');
    \t\t\$('#page').removeClass('fixbody');
\t\t\t});
\t\t
\t\t</script>
\t\t
\t\t<script>
\t\t\tfunction onSearch(form) {
    \t\t\tform.action += form.querySelector('#searchfield').value;
\t\t\t}
\t\t</script>
\t\t        
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

    // line 86
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
        return array (  406 => 86,  398 => 40,  392 => 36,  388 => 35,  384 => 34,  380 => 33,  376 => 32,  372 => 31,  368 => 30,  364 => 29,  360 => 28,  354 => 25,  349 => 24,  343 => 21,  334 => 18,  328 => 16,  322 => 14,  319 => 13,  313 => 11,  307 => 9,  305 => 8,  300 => 5,  297 => 4,  228 => 203,  223 => 201,  220 => 200,  218 => 199,  216 => 198,  200 => 184,  153 => 140,  132 => 121,  129 => 120,  109 => 101,  103 => 99,  101 => 98,  98 => 97,  92 => 95,  90 => 94,  85 => 91,  83 => 90,  78 => 87,  76 => 86,  47 => 62,  28 => 45,  26 => 4,  21 => 1,);
    }
}
