<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_f2f1cffed9da9eb03bea7ed51a766ea27d10b2fad9c64fde5f76088257d98ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        echo "    Un mail de confirmation vous est envoyé. <a href=\"https://mail.google.com\">Cliquez ici </a>
                                                                    
    ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "atnUserBundle::layout.html.twig" %}*/
/* */
/* {% block user_content %}*/
/*     Un mail de confirmation vous est envoyé. <a href="https://mail.google.com">Cliquez ici </a>*/
/*                                                                     */
/*     {% endblock %}*/
/* */
