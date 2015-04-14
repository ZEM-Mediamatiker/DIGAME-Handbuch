<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/01.systemuebersicht */
class __TwigTemplate_bdbc2ccc22ea3c9032fcda5a1c4be42ab91a74a9ef6058532fea7503a85c68a7 extends Twig_Template
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
        echo "<h2>Systemübersicht</h2>
<hr />
<p>Digame dient zur Verwaltung von Media Assets. Dabei werden die Media Assets in das System importiert wo sie mit Metadaten angereichert werden. Die Media Assets können einem Stichwortbaum zugeordnet werden was eine thematische Ordnung und ein leichteres Auffinden erlaubt. Die Abbildung 1: Digame Systemübersicht zeigt eine Übersicht der Möglichkeiten. Es ist möglich mehrere Applikationen zu haben, welche unterschiedliche Aufgaben erfüllen.</p>
<p>In der untenstehenden Darstellung sind drei Applikationen aufgeführt:</p>
<ul>
<li>
<p>Digame zur Verwaltung von Media Assets deren Verwendung in diesem Dokument beschrieben wird.</p>
</li>
<li>
<p>Digame Portal dient dem Zentrum elektronische Medien (ZEM) zur Publikation ihrer Media Assets.</p>
</li>
<li>Drittanwendung; Anbindung beliebiger Applikationen (bspw. CMS) über eine Schnittstelle.</li>
</ul>
<p>All diesen drei Teilen zugrunde liegt der Serverteil welcher die Funktionalität enthält und die Daten zu den Media Assets in einer Datenbank verwaltet. Ein weiterer zentraler Teil, sind die mandantenspezifischen Metadatenschema. Jeder Mandant kann über ein eigenes Metadatenschema verfügen. Mit den Metadaten wird den Media Assets „Leben eingehaucht“. Es können Daten wie Titel, Beschreibung, Ort der Aufnahme, Datum der Aufnahme usw. definiert werden.</p>
<p><br></p>
";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "systemmap.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 35: Systemübersicht DIGAME.</h6>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/01.systemuebersicht";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 16,  19 => 1,);
    }
}
