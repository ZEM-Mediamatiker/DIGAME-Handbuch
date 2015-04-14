<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich */
class __TwigTemplate_ceaad5df2aff0f87b8aa4793592a45cf4fddf129ef84da040f3a1e160a47bb7c extends Twig_Template
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
<h4>Suche: Web-Methode um ein gültiges Usertoken zu kriegen (Authentication)</h4>
";
        // line 104
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "tabelle1.png", array(), "array"), "html", array(), "method");
        echo "
<h4>Suche: Web-Methode zur Suche nach Media Assets</h4>
";
        // line 106
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "tabelle2.png", array(), "array"), "html", array(), "method");
        echo "
<h4>Suche: Web-Methode zur Suche nach Media Assets (Alle)</h4>
";
        // line 108
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "tabelle3.png", array(), "array"), "html", array(), "method");
        echo "
<h4>Herunterladen: Web-Methode um ein bestimmtes Media Asset zu lesen</h4>
<p>In der Rückgabe einer Suche wird jeweils die URL für das Vorschaubild und die effektive Mediadatei mitgeliefert. Durch den Aufruf der entsprechenden URL kann das Vorschaubild oder die Mediadatei vom Server geladen werden. Diese Lösung ist aus zwei Gründen implementiert worden. Wenn die gesamten Daten einer Mediadatei in der Rückgabe der Suche mitgeliefert würden, hätte dies direkte Auswirkungen auf die Geschwindigkeit der Suche. Der Benutzer führt eine Suche aus, um später eine Auswahl zu treffen, somit sind die Mediadaten erst in einem zweiten Schritt von Interesse.</p>
<h4>Sichtbarkeit der Assets für die Umsysteme (Organisation ZEM)</h4>
<p>Die Sichtbarkeit der Assets wird über sogenannte Container gesteuert. Befindet sich ein Asset in einem entsprechenden Container, so ist dieses über die Schnittstelle verfügbar. In Abbildung 4: Sichtbarkeit der Assets im VBS CMS ein Beispiel welches dies verdeutlicht. Über die Schnittstelle sind nur die Assets verfügbar welche sich in den berechtigten Containern befinden. In unserem Beispiel die beiden Assets welche in der Ansicht CMS VBS dargestellt werden.<br>
Die Assets müssen sich in den folgenden Containern befinden um für das Umsystem sichtbar / verfügbar zu sein:</p>
<ul>
<li>‚Internet‘ Container</li>
<li>‚{UmsystemContainer}‘ Container (z.B.: ‚CMS-VBS‘ für VBS CMS)</li>
</ul>
";
        // line 118
        echo $this->getAttribute($this->getAttribute((isset($context["media"]) ? $context["media"] : null), "3sichtbarkeitvbscms.png", array(), "array"), "html", array(), "method");
        echo "
<h6>Bild 38: Sichtbarkeit der Assets im VBS CMS</h6>
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
        return array (  153 => 118,  140 => 108,  135 => 106,  130 => 104,  124 => 101,  117 => 97,  19 => 1,);
    }
}
