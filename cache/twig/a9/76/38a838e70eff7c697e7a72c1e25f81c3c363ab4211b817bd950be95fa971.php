<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.technische_anforderungen */
class __TwigTemplate_a97638a838e70eff7c697e7a72c1e25f81c3c363ab4211b817bd950be95fa971 extends Twig_Template
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
        echo "<h2>Technische Anforderungen</h2>
<hr />
<p>Die Anwendung Digame stellt dokumentenbasierte Web Services zur Verfügung, über welche Daten gesucht und abgefragt werden können. Diese REST Web Services werden mit HTTPS als Nachrichtenprotokoll und Transportprotokoll realisiert. Für den Austausch der Nachrichten wird der XML oder JSON-Standard als Basis von REST verwendet.</p>
<p><br></p>
<h4>Protokolle</h4>
<p>Die Webservices werden als REST Services über HTTPS realisiert. Die Antworten werden als XML- oder JSON Daten (abhängig vom Http Request) zurückgegeben. <br></p>
<h4>Sicherheit</h4>
<p>Die Kommunikation zwischen dem Server und der Drittanwendung wird mit SSL 128 Bit verschlüsselt. <br></p>
<h4>Berechtigung</h4>
<p>Die Authentifizierung der Aufrufer erfolgt mit Basic Authentication (Paar Benutzername/Passwort steht in Http Header). Im Abschnitt Error! Reference source not found. Error! Reference source not found. ist beschrieben wie und mit welchen Benutzern der Service angesprochen werden kann.<br></p>
<h4>Fehlerbehandlung</h4>
<p>Jeder Methodenaufruf, der vom System nicht behandelt werden kann, wird mit einer HTTP Exception quittiert.<br></p>
<table>
<thead>
<tr>
<th>Action</th>
<th>HttpStatusCode</th>
<th></th>
<th>Status description</th>
<th>Message content (localized)</th>
</tr>
</thead>
<tbody>
<tr>
<td>Download / Preview</td>
<td>internalServerError</td>
<td>500</td>
<td>Handler error</td>
<td>Während des Ladens der Datei ist ein interner Fehler aufgetreten.</td>
</tr>
<tr>
<td>engine</td>
<td>engine to be used for processing templates. Handlebars is the default.</td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>ext</td>
<td>extension to be used for dest files.</td>
<td></td>
<td></td>
<td></td>
</tr>
</tbody>
</table>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.technische_anforderungen";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
