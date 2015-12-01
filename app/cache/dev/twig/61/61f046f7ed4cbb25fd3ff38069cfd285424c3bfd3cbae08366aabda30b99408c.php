<?php

/* ::layout.html.twig */
class __TwigTemplate_4a3d68b60a59f7de19d98862cccb824b31122339a7b050b51218f8163e10fc26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block_head' => array($this, 'block_block_head'),
            'title' => array($this, 'block_title'),
            'block_body' => array($this, 'block_block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        ";
        // line 5
        $this->displayBlock('block_head', $context, $blocks);
        // line 20
        echo "    </head>
    <body>
         ";
        // line 22
        $this->displayBlock('block_body', $context, $blocks);
        // line 24
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_block_head($context, array $blocks = array())
    {
        // line 6
        echo "        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!-- Js Tree Styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("jstree/dist/themes/default/main.min.css"), "html", null, true);
        echo "\" />
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font/font.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/application.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/toolkit.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
         <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery-2.1.4.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        
        ";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Allemni ";
    }

    // line 22
    public function block_block_body($context, array $blocks = array())
    {
        // line 23
        echo "         ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  92 => 22,  86 => 8,  79 => 17,  75 => 16,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  54 => 10,  49 => 8,  45 => 6,  42 => 5,  36 => 24,  34 => 22,  30 => 20,  28 => 5,  22 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html xmlns="http://www.w3.org/1999/xhtml">*/
/*     <head>*/
/*         {% block block_head %}*/
/*         <meta charset="utf-8" />*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0" />*/
/*         <title>{% block title %}Allemni {% endblock title %}</title>*/
/*         <!-- Js Tree Styles-->*/
/*         <link rel="stylesheet" href="{{ asset('jstree/dist/themes/default/main.min.css')}}" />*/
/*         <link href="{{ asset('css/font/font.css')}}" rel="stylesheet" />*/
/*         <link href="{{ asset('css/application.css')}}" rel="stylesheet" />*/
/*         <link href="{{ asset('css/toolkit.css')}}" rel="stylesheet" />*/
/*          <link href="{{ asset('css/bootstrap.css')}}" rel="stylesheet" />*/
/* */
/*         <script src="{{ asset('js/jquery-2.1.4.js')}}"></script>*/
/*         <script src="{{ asset('js/bootstrap.js')}}"></script>*/
/*         */
/*         {% endblock block_head %}*/
/*     </head>*/
/*     <body>*/
/*          {% block block_body %}*/
/*          {% endblock block_body %}*/
/*     </body>*/
/* </html>*/
/* */
