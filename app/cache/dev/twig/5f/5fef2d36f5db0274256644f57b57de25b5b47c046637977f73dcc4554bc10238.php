<?php

/* ::layoutConnected.html.twig */
class __TwigTemplate_f8d81dfdb89eb0090ef57552759869d442436023b4d2fbc279e96a702c9e8e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "::layoutConnected.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
            'menu' => array($this, 'block_menu'),
            'page_inner' => array($this, 'block_page_inner'),
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
        // line 3
        echo "            <div id=\"wrapper\">
            ";
        // line 4
        $this->displayBlock('menu', $context, $blocks);
        // line 42
        echo "           
            <!-- /. NAV SIDE  -->
            <div id=\"page-wrapper\" >
                <div id=\"page-inner\">
                    ";
        // line 46
        $this->displayBlock('page_inner', $context, $blocks);
        // line 47
        echo "                </div>
            </div>
        </div>
";
    }

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "             <nav class=\"navbar navbar-default navbar-cls-top \" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".sidebar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"index.html\">Binary admin</a> 
                </div>
                ";
        // line 15
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 16
            echo "                    <div class=\"denier-acces\"> dernier accès pour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getUsername", array(), "method"), "html", null, true);
            echo " : ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "getLastLogin", array(), "method"), "d/m/y h:m:s"), "html", null, true);
            echo "  &nbsp; 
                        <a href=";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo " class=\"btn btn-danger square-btn-adjust\">Déconnexion</a> 
                    </div>
                ";
        }
        // line 20
        echo "            </nav>   
            <!-- /. NAV TOP  -->
            <nav class=\"navbar-default navbar-side\" role=\"navigation\">
                <div class=\"sidebar-collapse\">
                    <ul class=\"nav\" id=\"main-menu\">
                        <li class=\"text-center\">
                            <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/find_user.png"), "html", null, true);
        echo "\" class=\"user-image img-responsive\"/>
                        </li>


                        <li>
                            <a class=\"active-menu\"  href= ";
        // line 31
        echo $this->env->getExtension('routing')->getPath("atn_dashboard_index");
        echo " ><i class=\"fa fa-dashboard fa-3x\"></i> Dashboard</a>
                        </li>



                    </ul>

                </div>

            </nav>  
        ";
    }

    // line 46
    public function block_page_inner($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "::layoutConnected.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 46,  99 => 31,  91 => 26,  83 => 20,  77 => 17,  70 => 16,  68 => 15,  56 => 5,  53 => 4,  46 => 47,  44 => 46,  38 => 42,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block block_body %}*/
/*             <div id="wrapper">*/
/*             {% block menu %}*/
/*              <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="index.html">Binary admin</a> */
/*                 </div>*/
/*                 {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                     <div class="denier-acces"> dernier accès pour {{ app.user.getUsername() }} : {{ app.user.getLastLogin()|date ('d/m/y h:m:s') }}  &nbsp; */
/*                         <a href={{ path('fos_user_security_logout') }} class="btn btn-danger square-btn-adjust">Déconnexion</a> */
/*                     </div>*/
/*                 {% endif %}*/
/*             </nav>   */
/*             <!-- /. NAV TOP  -->*/
/*             <nav class="navbar-default navbar-side" role="navigation">*/
/*                 <div class="sidebar-collapse">*/
/*                     <ul class="nav" id="main-menu">*/
/*                         <li class="text-center">*/
/*                             <img src="{{ asset('assets/img/find_user.png')}}" class="user-image img-responsive"/>*/
/*                         </li>*/
/* */
/* */
/*                         <li>*/
/*                             <a class="active-menu"  href= {{path('atn_dashboard_index')}} ><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>*/
/*                         </li>*/
/* */
/* */
/* */
/*                     </ul>*/
/* */
/*                 </div>*/
/* */
/*             </nav>  */
/*         {% endblock menu %}*/
/*            */
/*             <!-- /. NAV SIDE  -->*/
/*             <div id="page-wrapper" >*/
/*                 <div id="page-inner">*/
/*                     {% block page_inner %} {% endblock page_inner %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* {% endblock block_body %}*/
