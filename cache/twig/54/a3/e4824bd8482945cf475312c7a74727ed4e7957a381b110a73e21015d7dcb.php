<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich */
class __TwigTemplate_54a3e4824bd8482945cf475312c7a74727ed4e7957a381b110a73e21015d7dcb extends Twig_Template
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
        echo "<h2>Fachliche Anforderungen</h2>
<hr />
<h4>URLs – Aufrufe der Webservices</h4>
<table>
<thead>
<tr>
<th>Link</th>
<th>Beispiel</th>
</tr>
</thead>
<tbody>
<tr>
<td>Usertoken</td>
<td>Gültiges Usertoken anzufragen</td>
</tr>
<tr>
<td>Search</td>
<td>Suche nach Media Assets</td>
</tr>
<tr>
<td>Search All</td>
<td>Alle Assets anfragen</td>
</tr>
</tbody>
</table>
<h4>Testsystem</h4>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>URL:</td>
<td>https://www.digame.mediathek-admin.com/api</td>
</tr>
<tr>
<td>User (Basic Authenticaiton):</td>
<td>cmsuser</td>
</tr>
<tr>
<td>Passwort:</td>
<td></td>
</tr>
</tbody>
</table>
<h4>Integrationssystem</h4>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>URL:</td>
<td>https://www.test.digame.mediathek-admin.ch/api</td>
</tr>
<tr>
<td>User (Basic Authenticaiton):</td>
<td>cmsuser</td>
</tr>
<tr>
<td>Passwort:</td>
<td></td>
</tr>
</tbody>
</table>
<h4>Produktivsystem (Livesystem)</h4>
<table>
<thead>
<tr>
<th></th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>URL:</td>
<td>https://www.digame.mediathek-admin.ch/api</td>
</tr>
<tr>
<td>User (Basic Authenticaiton):</td>
<td>cmsuser</td>
</tr>
<tr>
<td>Passwort:</td>
<td>[zu definieren]</td>
</tr>
</tbody>
</table>
<h4>Zugriff / Benutzer und organisatorische Trennung der Services</h4>
<p>Die Error! Reference source not found. zeigt wie auf einen Service zugegriffen werden kann und welche technischen Benutzer dabei beteiligt sind. Weiter ist aus der Abbildung die organisatorische Trennung sichtbar. Die URL, um einen Usertoken zu erstellen, ist über den Benutzer an den entsprechenden Mandanten gebunden.</p>
";
        // line 97
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "schematischeraufbau.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 36: Schematischer Aufbau / beteiligte.</h6>
<h4>Auflistung und Beschreibung der Webservices-Methoden</h4>
<p>Die Abbildung 37: \"Ablauf eines Aufrufes\" zeigt den Ablauf eines Zugriffs auf die Digame Webserviceschnittstelle. Das System muss sich mit den Credentials bei der Schnittstelle authentifizieren. Ist die Authentifizierung erfolgreich so wird ein Usertoken erstellt. Dieser Usertoken ist zeitlich begrenzt (momentan 30min) und wird an den Aufrufer zurückgeliefert. Ist das System authentifiziert kann eine Suchanfrage gestartet werden. Als Ergebnis werden die gefundenen Media Assets gemäss 3.7 Response Formate zurückgeliefert. Über die im Resultat enthaltenen URL’s können nach Bedarf die Mediadaten für Vorschaubild und die effektive Mediadatei vom Server geladen werden und im aufrufenden System angezeigt werden.</p>
";
        // line 101
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "ablaufaufruf.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 37: Ablauf eines Aufrufes</h6>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 101,  117 => 97,  19 => 1,);
    }
}
