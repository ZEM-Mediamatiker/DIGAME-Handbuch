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
<html lang=\"de\">
    <head>
\t\t";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 42
        echo "    </head>

      <body>
      \t<input type=\"checkbox\" id=\"navbtn\">
      \t
      \t<section id=\"page\">
\t\t\t<header id=\"header\">      \t\t\t
      \t\t\t<div id=\"logo\">      \t\t\t      \t\t\t
      \t\t\t</div> \t
      \t\t\t<div id=\"title\">
      \t\t\t\t<h3 class=\"header-title\"><a href=\"";
        // line 52
        echo (isset($context["base_url_absolute"]) ? $context["base_url_absolute"] : null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "site", array()), "title", array());
        echo "</a></h3>
      \t\t\t</div>
      \t\t\t<a class=\"print\" href=\"javascript:window.print()\">
      \t\t\t<div id=\"print_icon\">
      \t\t\t\t<div class=\"menutransform2\">            \t\t\t 
            \t\t</div>
      \t\t\t</div> 
      \t\t\t</a> 
      \t\t\t<div id=\"showSearchOverlay\" class=\"search_icon\">
      \t\t\t\t<div class=\"menutransform3\">      \t\t\t\t      \t\t\t\t\t          \t\t\t 
            \t\t</div>
      \t\t\t</div>\t\t\t     \t
      \t\t</header>
      \t\t<div class=\"clearfix\"></div>
      \t\t
      \t\t<section id=\"content\">
      \t\t\t<div class=\"padding\">
      \t\t\t\t";
        // line 69
        $this->displayBlock('content', $context, $blocks);
        // line 70
        echo "      \t\t\t\t<div class=\"copywrapper\">
      \t\t\t\t\t&copy; 2015 | <a href=\"http://zem.ch\" target=\"_blank\" alt=\"Zentrum elektronische Medien\">Zentrum elektronische Medien</a><br>
      \t\t\t\t\tVersion: 2.1.1\t
      \t\t\t\t</div>
      \t\t\t</div>
      \t\t\t";
        // line 75
        $context["progress"] = $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "collection", array(0 => array("items" => array("@taxonomy.category" => "digame"), "order" => array("by" => "default", "dir" => "asc"))), "method");
        // line 76
        echo "      \t\t\t<div id=\"navigation\">
      \t\t\t\t";
        // line 77
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isFirst", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 78
            echo "      \t\t\t\t<a class=\"nav nav-prev\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59237;</i></a>
      \t\t\t\t";
        }
        // line 80
        echo "      \t\t\t\t";
        if ( !$this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "isLast", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method")) {
            // line 81
            echo "      \t\t\t\t<a class=\"nav nav-next\" href=\"";
            echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
            echo "\"><i class=\"icon-navigation-arrows\">&#59238;</i></a>
      \t\t\t\t";
        }
        // line 83
        echo "      \t\t\t</div>
      \t\t\t<div class=\"clearfix\"></div>
      \t\t</section>
      \t\t<div class=\"clearfix\"></div>
      \t</section>
      \t
      \t<section id=\"menu-overlay\">
      \t\t<section id=\"menucontainer\">
      \t\t\t<div id=\"menu-navigation\">
      \t\t\t\t";
        // line 93
        echo "        \t\t\t";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 93)->display($context);
        // line 94
        echo "        \t\t\t<div class=\"clearfix\"></div>
      \t\t\t</div>
      \t\t</section>
      \t\t<a class=\"printmenu\" href=\"javascript:window.print()\">
      \t\t<div class=\"printmenubutton\">
      \t\t\t<div class=\"menutransform2\">            \t\t\t 
            \t</div>
      \t\t</div>    
      \t\t</a>\t
      \t</section>      \t
      \t
      \t<section id=\"search-overlay\">
      \t\t<section id=\"searchcontainer\">
      \t\t\t<p class=\"searchdescription\">Geben Sie einen Suchbegriff ein</p>      \t\t
      \t\t\t\t<div id=\"search-searchconatiner\">
      \t\t\t\t<form method=\"POST\" action=\"";
        // line 109
        echo (isset($context["base_url_relative"]) ? $context["base_url_relative"] : null);
        echo "/search/query:\" onsubmit=\"onSearch(this)\">     \t\t\t\t
      \t\t\t\t\t<input id=\"searchfield\" type=\"text\" placeholder=\"Suche...\" autocomplete=\"off\" required>
      \t\t\t\t\t<input type=\"submit\" value=\" \">
      \t\t\t\t</form>
      \t\t\t</div>
      \t\t</section>
      \t\t
      \t\t<div id=\"closeSearchOverlay\" class=\"searchmenubutton\">
       \t\t\t<div class=\"menutransform\">
            \t\t<div class=\"linie top left\"></div>
           \t\t\t<div class=\"linie top right\"></div> 
            \t\t<div class=\"linie bottom left\"></div>
            \t\t<div class=\"linie bottom right\"></div>  
            \t</div> 
            </div>  
        </section>
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
        </div>     \t\t     

        ";
        // line 140
        echo "        ";
        // line 141
        echo "        ";
        // line 142
        echo "        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
        <script src=\"";
        // line 143
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/modernizr.js\"></script>       
        <script src=\"";
        // line 144
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 145
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/mousetrap.min.js\"></script>
        <script src=\"";
        // line 146
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/scripts.js\"></script>
        <script src=\"";
        // line 147
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/js/classie.js\"></script>
\t\t<script>
\t\t\tMousetrap.bind('s', function(e){
\t\t\t\t\$('#search-overlay').addClass('open-searchoverlay');
\t\t\t\t\$('#searchfield').focus();
\t\t\t});
\t\t\tMousetrap.bind('m', function(e){
\t\t\t\t\$('#page').addClass('fixbody');
\t\t\t\t\$('#menu-overlay').addClass('open-overlay');
\t\t\t\t\$('#navbtn').prop('checked', true);
\t\t\t});
\t\t\tMousetrap.bind('p', function(e){
\t\t\t\twindow.print();
\t\t\t});\t
\t\t\tMousetrap.bind('right', function(e){
\t\t\t\twindow.location.href = \"";
        // line 162
        echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "prevSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
        echo "\";
\t\t\t});\t
\t\t\tMousetrap.bind('left', function(e){
\t\t\t\twindow.location.href = \"";
        // line 165
        echo $this->getAttribute($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "nextSibling", array(0 => $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "path", array())), "method"), "url", array());
        echo "\";
\t\t\t});
\t\t\tMousetrap.bind('esc', function(e){
\t\t\t\t\$('#page').removeClass('fixbody');
\t\t\t\t\$('#menu-overlay').removeClass('open-overlay');
\t\t\t\t\$('#navbtn').prop('checked', false);
\t\t\t\t\$('#search-overlay').removeClass('open-searchoverlay');
\t\t\t});
\t\t</script>\t        
    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t\t";
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 5)->display($context);
        // line 6
        echo "\t\t<meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        // line 9
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array())) {
            // line 10
            echo "        <meta name=\"robots\" content=\"";
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "robots", array());
            echo "\">
        ";
        }
        // line 12
        echo "
        <title>";
        // line 13
        if ($this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array())) {
            echo $this->getAttribute((isset($context["header"]) ? $context["header"] : null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title", array());
        echo "</title>

        ";
        // line 16
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\">

        ";
        // line 19
        echo "        <link href=\"";
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/print.min.css\" rel=\"stylesheet\" media=\"print\">
        <link href=\"";
        // line 20
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/css/bootstrap-custom.css\" rel=\"stylesheet\" media=\"screen\">
        
        <link rel=\"shortcut icon\" href=\"";
        // line 22
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/layout/favicon.ico\" type=\"image/x-icon\" />
\t\t<link rel=\"icon\" href=\"";
        // line 23
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/layout/favicon.ico\" type=\"image/x-icon\" />        
        
        <link rel=\"apple-touch-icon\" href=\"";
        // line 25
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"57x57\" href=\"";
        // line 26
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-57x57.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"60x60\" href=\"";
        // line 27
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-60x60.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"";
        // line 28
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-72x72.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"76x76\" href=\"";
        // line 29
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-76x76.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"";
        // line 30
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-114x114.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"120x120\" href=\"";
        // line 31
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-120x120.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"144x144\" href=\"";
        // line 32
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-144x144.png\" />
    \t<link rel=\"apple-touch-icon\" sizes=\"152x152\" href=\"";
        // line 33
        echo (isset($context["theme_url"]) ? $context["theme_url"] : null);
        echo "/images/touch-images/apple-touch-icon-152x152.png\" />
        

        ";
        // line 37
        echo "        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->
        ";
    }

    // line 69
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
        return array (  321 => 69,  313 => 37,  307 => 33,  303 => 32,  299 => 31,  295 => 30,  291 => 29,  287 => 28,  283 => 27,  279 => 26,  275 => 25,  270 => 23,  266 => 22,  261 => 20,  256 => 19,  250 => 16,  241 => 13,  238 => 12,  232 => 10,  230 => 9,  225 => 6,  222 => 5,  219 => 4,  204 => 165,  198 => 162,  180 => 147,  176 => 146,  172 => 145,  168 => 144,  164 => 143,  161 => 142,  159 => 141,  157 => 140,  124 => 109,  107 => 94,  104 => 93,  93 => 83,  87 => 81,  84 => 80,  78 => 78,  76 => 77,  73 => 76,  71 => 75,  64 => 70,  62 => 69,  40 => 52,  28 => 42,  26 => 4,  21 => 1,);
    }
}
