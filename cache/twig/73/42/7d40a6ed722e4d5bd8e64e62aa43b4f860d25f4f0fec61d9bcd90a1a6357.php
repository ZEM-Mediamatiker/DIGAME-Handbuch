<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich */
class __TwigTemplate_73427d40a6ed722e4d5bd8e64e62aa43b4f860d25f4f0fec61d9bcd90a1a6357 extends Twig_Template
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
<p><br></p>
<hr />";
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
