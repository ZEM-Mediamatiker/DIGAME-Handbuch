<?php

/* @Page:/Applications/MAMP/htdocs/gravTest/user/pages/04.changelog */
class __TwigTemplate_e1bc9de5f64328f5af25a4099cca4141667e636267ad2d338d3f9494c8f92c68 extends Twig_Template
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
        echo "<h1>Changelog</h1>
<h3>Hier finden Sie alle Informationen zur aktuellen Version</h3>
<table>
<thead>
<tr>
<th>Symbol</th>
<th>Bedeutung</th>
</tr>
</thead>
<tbody>
<tr>
<td>+</td>
<td>Hinzugefügt</td>
</tr>
<tr>
<td>^</td>
<td>Geändert</td>
</tr>
<tr>
<td>-</td>
<td>Entfernt</td>
</tr>
<tr>
<td>#</td>
<td>Fehlerbehebung</td>
</tr>
<tr>
<td>*</td>
<td>Sicherheitsanpassung</td>
</tr>
<tr>
<td>!</td>
<td>Anmerkung</td>
</tr>
</tbody>
</table>
<p><br></p>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<blockquote>
<p>Version 6.1<br></p>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
</blockquote>
<table>
<thead>
<tr>
<th></th>
<th>Change</th>
</tr>
</thead>
<tbody>
<tr>
<td>+</td>
<td>Changelog eingeführt</td>
</tr>
<tr>
<td>+</td>
<td>Copyrighthinweis in Sidebar</td>
</tr>
<tr>
<td>^</td>
<td>Druckausgabe zeigt nun Footer mit Copyright- und Versionshinweis an.</td>
</tr>
</tbody>
</table>
<p><br></p>
<hr />";
    }

    public function getTemplateName()
    {
        return "@Page:/Applications/MAMP/htdocs/gravTest/user/pages/04.changelog";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
