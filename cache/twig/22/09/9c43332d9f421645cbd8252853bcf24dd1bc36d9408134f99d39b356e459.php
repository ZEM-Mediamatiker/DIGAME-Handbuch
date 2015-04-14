<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/01.systemuebersicht */
class __TwigTemplate_22099c43332d9f421645cbd8252853bcf24dd1bc36d9408134f99d39b356e459 extends Twig_Template
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
<li>Drittanwendung; Anbindung beliebiger Applikationen (bspw. CMS) über eine Schnittstelle.</li>
</ul>
<p>All diesen drei Teilen zugrunde liegt der Serverteil welcher die Funktionalität enthält und die Daten zu den Media Assets in einer Datenbank verwaltet. Ein weiterer zentraler Teil, sind die mandantenspezifischen Metadatenschema. Jeder Mandant kann über ein eigenes Metadatenschema verfügen. Mit den Metadaten wird den Media Assets „Leben eingehaucht“. Es können Daten wie Titel, Beschreibung, Ort der Aufnahme, Datum der Aufnahme usw. definiert werden.</p>
<p><br></p>
";
        // line 16
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "overview.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 2: Programmoberfläche von DIGAME.</h6>
<p><br></p>
<hr />
<h2>An- und Abmelden</h2>
<p>Der Benutzer muss sich bei DIGAME an- und abmelden. Der Benutzer gibt dazu seinen Benutzernamen (1) und sein Passwort (2) ein. Bevor er den Knopf Anmelden (5) betätigt muss er in (3) seine Organisation wählen. Falls der Benutzer eine falsche Organisation auswählt kann er sich nicht anmelden. Über (4) kann die gewünschte Applikationssprache gewählt werden. Momentan sind die Sprachen Englisch und Deutsch möglich.</p>
<p><br></p>
";
        // line 23
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "login.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 3: Das Anmeldefenster beim Programmstart.</h6>
<p><br></p>
<p>Die Benutzeridentifikation wird rechts oben in der Menüleiste angezeigt (Abbildung 2: Grundaufbau). Durch betätigen des Knopfs Abmelden wird der Benutzer am System abgemeldet.</p>
<hr />
<h2>Passwort ändern</h2>
<p>Der Benutzer kann jederzeit sein Passwort ändern. Dazu muss er im Menü-Bereich (2) aus Abbildung 2: Grundaufbau das Menü Passwort ändern wählen.
<br></p>
";
        // line 31
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "password.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 4: Die Einstellung zum Ändern des eigenen Passworts.</h6>
<p><br>
In Feld (1) wird der Benutzername des angemeldeten Benutzers dargestellt. Dieser kann vom Benutzer nicht geändert werden.
Im Feld (2) muss der Benutzer das aktuelle Passwort eingeben.
Im Feld (3) muss der Benutzer das neue Passwort eingeben.
Im Feld (4) muss der Benutzer das neue Passwort zur Bestätigung ein zweites Mal eingeben.</p>
<p>Sind alle Eingaben korrekt erscheint nach dem Betätigen von (5) Passwort ändern die Meldung, dass das Passwort geändert wurde.
Der Prozess Passwort ändern kann abgebrochen werden, in dem der Benutzer im Menü-Bereich (2) aus Abbildung 2: Grundaufbau in das Hauptmenü Katalog wechselt.</p>
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
        return array (  57 => 31,  46 => 23,  36 => 16,  19 => 1,);
    }
}
