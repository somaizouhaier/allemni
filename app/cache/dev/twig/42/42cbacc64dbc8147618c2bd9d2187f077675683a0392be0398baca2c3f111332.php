<?php

/* ::layoutNotConnected.html.twig */
class __TwigTemplate_0d5920b6fef4edcecbf3732113bf35e34350d63e23dc7cab2cfa709e40e59269 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layoutNotConnected.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layoutNotConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block block_body %}*/
/* {% endblock block_body %}*/
