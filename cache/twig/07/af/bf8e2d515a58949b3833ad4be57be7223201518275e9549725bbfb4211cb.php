<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich */
class __TwigTemplate_07afbf8e2d515a58949b3833ad4be57be7223201518275e9549725bbfb4211cb extends Twig_Template
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
<p>Die Webservices werden als REST Services über HTTPS realisiert. Die Antworten werden als XML- oder JSON Daten (abhängig vom Http Request) zurückgegeben. <br></p>
<h4>Sicherheit</h4>
<p>Die Kommunikation zwischen dem Server und der Drittanwendung wird mit SSL 128 Bit verschlüsselt. <br></p>
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
<td>InternalServerError</td>
<td>500</td>
<td>Handler error</td>
<td>Während des Ladens der Datei ist ein interner Fehler aufgetreten.</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>All</td>
<td>Unauthorized</td>
<td>401</td>
<td>Usertoken expired</td>
<td>Usertoken nicht mehr gültig</td>
</tr>
<tr>
<td>All</td>
<td>BadRequest</td>
<td>400</td>
<td>Bad Usertoken</td>
<td>Usertoken ist ungültig</td>
</tr>
<tr>
<td>All</td>
<td>All others</td>
<td>404</td>
<td>Not found</td>
<td>(IIS http error message)</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Search / Usertoken</td>
<td>InternalServerError</td>
<td>500</td>
<td>Internal error</td>
<td>Ein interner Fehler ist aufgetreten.</td>
</tr>
<tr>
<td>Search / Usertoken</td>
<td>BadRequest</td>
<td>400</td>
<td>Missing http context</td>
<td>Der Server kann den Request nicht verstehen. Der HttpContext fehlt.</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Search</td>
<td>Unauthorized</td>
<td>401</td>
<td>Missing usertoken</td>
<td>Usertoken ist in HttpHeader nicht verfügbar</td>
</tr>
<tr>
<td>Search</td>
<td>LengthRequired</td>
<td>411</td>
<td>Missing search query</td>
<td>Kein gültiger Suchtext vorhanden</td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
</tr>
<tr>
<td>Usertoken</td>
<td>Forbidden</td>
<td>403</td>
<td>Https required</td>
<td>SSL ist für dieses Query nötig</td>
</tr>
<tr>
<td>Usertoken</td>
<td>Unauthorized</td>
<td>401</td>
<td>Action not allowed</td>
<td>Dieses Query ist für diesen Benutzer nicht erlaubt.</td>
</tr>
<tr>
<td>Usertoken</td>
<td>InternalServerError</td>
<td>500</td>
<td>User not found</td>
<td>Internal Benutzer kann nicht gefunden werden.</td>
</tr>
</tbody>
</table>
<h4>Kommunikation</h4>
<p>Die Kommunikation zwischen dem Digame-Server und den Benutzern erfolgt durch HTTP Anfragen. Diese Nachrichten übertragen die Anfragen und Antworten zwischen Client (Umsystem) und Server (Digame). Client und Server bauen zum Austausch der Nachrichten eine TCP/IP-Verbindung auf. Die auch Request und Response genannten Nachrichten bestehen im Wesentlichen aus zwei Teilen: Header und Daten. Der Header enthält Steuerinformationen wie zum Beispiel die Authentifizierung oder den gewünschten Response Format. Der Datenabschnitt der Nachricht selbst besteht aus einer XML/JSON-Nachricht (Response).<br></p>
<h4>Request Format (HTTP)</h4>
<p>Die Anfragen sind als RESTful Request ausgeführt. Alle Parameter stehen entweder in der URL oder im HTTP Header.
Alle Parameter, die in der URL stehen, müssen den Konventionen einer URL entsprechen. Spezielle Zeichen (z.B. für eine Suche) sind nicht erlaubt.<br></p>
<table>
<thead>
<tr>
<th>Beispiel</th>
<th></th>
</tr>
</thead>
<tbody>
<tr>
<td>falsch</td>
<td>Soldat mit Hund</td>
</tr>
<tr>
<td>richtig</td>
<td>Soldat%20mit%20Hund</td>
</tr>
</tbody>
</table>
<p><br></p>
<hr />
<h4>Respondse Formate (XML)</h4>
<p>Beispiel einer Antwort bei einer ‚Usertoken‘ Abfrage (Authentication)<br></p>
<pre><code>&lt;UserToken xmlns:i=\"http://www.w3.org/2001/XMLSchema-instance\"&gt;
    &lt;Token&gt;PD94bWwgdmVyc2lvbj0iMS4wIj ... l6YWJsZT4=&lt;/Token&gt;
&lt;/UserToken&gt;</code></pre>
<p>Beispiel einer Antwort bei einer ‚Asset Suche‘ Abfrage (1 Asset wird zurückgegeben)<br></p>
<pre><code>&lt;ArrayOfAssetSearchSummary xmlns:i=\"http://www.w3.org/2001/XMLSchema-instance\"&gt;
    &lt;AssetSearchSummary&gt;
        &lt;AssetId&gt;17&lt;/AssetId&gt;
        &lt;AssetType&gt;PIC&lt;/AssetType&gt;
        &lt;Description&gt;Beschreibung&lt;/Description&gt;
        &lt;DownloadUrl&gt;
            http://localhost:57824/AssetDownload.ashx?assetId=17&amp;amp;highRes=true&amp;amp;
            usertoken=PD94bW ... hbGl6YWJsZT4=
        &lt;/DownloadUrl&gt;
        &lt;PreviewUrl&gt;
            http://localhost:57824/AssetPreview.ashx?assetId=17&amp;amp;thumbnail=false
        &lt;/PreviewUrl&gt;
        &lt;Title&gt;Title&lt;/Title&gt;
    &lt;/AssetSearchSummary&gt;
&lt;/ArrayOfAssetSearchSummary&gt;</code></pre>
<h4>Respondse Formate (JSON)</h4>
<p>Beispiel einer Antwort bei einer ‚Usertoken‘ Abfrage (Authentication)<br></p>
<pre><code>{ 
\"Token\":\"PD94bWwgdmVyc2lvbj ... Gl6YWJsZT4=\" 
}</code></pre>
<p>Beispiel einer Antwort bei einer ‚Asset Suche‘ Abfrage (1 Asset wird zurückgegeben)<br></p>
<pre><code>[ 
    { 
        \"AssetId\": 17, 
        \"Title\": \"\", 
        \"Description\": 
        \"Beschreibung\", 
        \"AssetType\": \"PIC\", 
        \"PreviewUrl\": \"http://localhost:57824/AssetPreview.ashx?assetId=17&amp;thumbnail=false\",
        \"DownloadUrl\": \"http://localhost:57824/AssetDownload.ashx?assetId=17&amp;highRes=false
        &amp;usertoken=PD94bWwgdmVyc2 ... WJsZT4=\" 
    } 
]</code></pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}