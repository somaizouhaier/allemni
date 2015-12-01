<?php

/* atnUserBundle:Registration:accueil.html.twig */
class __TwigTemplate_cb60aa454f5e1b26f45eb4fcf66346e734a40fe844dc8340c1d03ce454204515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "atnUserBundle:Registration:accueil.html.twig", 1);
        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "atnUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    
    ";
        // line 5
        $this->loadTemplate("atnUserBundle:Security:login_content.html.twig", "atnUserBundle:Registration:accueil.html.twig", 5)->display($context);
        echo "  
";
        // line 6
        $this->loadTemplate("atnUserBundle:Registration:register_content.html.twig", "atnUserBundle:Registration:accueil.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Registration:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "atnUserBundle::layout.html.twig" %}*/
/* */
/* {% block user_content %}*/
/*     */
/*     {% include "atnUserBundle:Security:login_content.html.twig" %}  */
/* {% include "atnUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock user_content %}*/
/* */
