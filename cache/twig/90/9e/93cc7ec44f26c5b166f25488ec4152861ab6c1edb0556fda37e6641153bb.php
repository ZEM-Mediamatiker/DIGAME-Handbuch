<?php

/* @Page:/Applications/MAMP/htdocs/DIGAME/user/pages/04.schnittstellen/02.anforderungen/02.fachlich */
class __TwigTemplate_909e93cc7ec44f26c5b166f25488ec4152861ab6c1edb0556fda37e6641153bb extends Twig_Template
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
