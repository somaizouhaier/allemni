<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_f438cbefd4ecfb0039e4541ce149521edf0370b0e391eeb7a263f298928335e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $this->loadTemplate("atnUserBundle:security:login_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        echo "    
    
";
        // line 6
        $this->loadTemplate("atnUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 6)->display($context);
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "atnUserBundle::layout.html.twig" %}*/
/* */
/* {% block user_content %}*/
/* {% include "atnUserBundle:security:login_content.html.twig" %}    */
/*     */
/* {% include "atnUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock user_content %}*/
/* */
