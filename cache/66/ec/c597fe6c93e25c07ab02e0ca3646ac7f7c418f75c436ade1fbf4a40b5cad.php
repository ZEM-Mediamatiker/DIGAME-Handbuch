<?php

/* simplesearch_results.html.twig */
class __TwigTemplate_66ecc597fe6c93e25c07ab02e0ca3646ac7f7c418f75c436ade1fbf4a40b5cad extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("partials/simplesearch_base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/simplesearch_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"content-padding\">
    <h1 class=\"search-header\">Suchresultate</h1>
    <h3>Suchbegriff: \"";
        // line 6
        echo (isset($context["query"]) ? $context["query"] : null);
        echo "\" -  In ";
        echo $this->getAttribute((isset($context["search_results"]) ? $context["search_results"] : null), "count");
        echo " ";
        echo $this->env->getExtension('GravTwigExtension')->inflectorFilter("plural", "Seiten", $this->getAttribute((isset($context["search_results"]) ? $context["search_results"] : null), "count"));
        echo " gefunden</h3>

    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["search_results"]) ? $context["search_results"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 9
            echo "        ";
            $this->env->loadTemplate("partials/simplesearch_item.html.twig")->display(array_merge($context, array("page" => (isset($context["page"]) ? $context["page"] : null))));
            // line 10
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "simplesearch_results.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  64 => 10,  61 => 9,  44 => 8,  35 => 6,  31 => 4,  28 => 3,);
    }
}
