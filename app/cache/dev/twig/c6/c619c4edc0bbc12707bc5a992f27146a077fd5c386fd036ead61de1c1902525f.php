<?php

/* atnUserBundle:Registration:login.html.twig */
class __TwigTemplate_28cf00a7f3a2eacdbc0a410bbaaa2bd1e129a4aea400ca9f676928529d7454c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("atnUserBundle::layout.html.twig", "atnUserBundle:Registration:login.html.twig", 2);
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

    // line 4
    public function block_user_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"row \" >

        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <div class=\"panel modal-dialog modal-content\">
                <div class=\" panel-heading\">
                    <strong>   Entrez vos identifiants  </strong>  
                </div>
                <div class=\"panel-body\">
                    <form   action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"form-group input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-tag\"></i></span>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\"  placeholder=\" pseudonyme\"  data-toggle=\"tooltip\" data-placement=\"right\">
                        </div>
                        <div class=\"form-group input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-lock\"></i></span>
                            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"mot de passe\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"checkbox-inline\">
                                <input type=\"checkbox\" > Se souvenir de moi
                            </label>
                            <span class=\"pull-right\">
                                <a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"  class=\"btn btn-link\">mot de passe perdu?</a>
                            </span>
                        </div>
                       
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn btn-success\">Connectez-vous&nbsp&nbsp<span class=\"glyphicon glyphicon-chevron-right\"></span></button>

                            <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" id=\"_submit\" name=\"_submit\"  type=\"button\" class=\" btn btn-danger btn-inscri\" >Inscrivez-vous&nbsp&nbsp <span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                         
                    </form>
                </div>

            </div>
        </div>


    </div>
                            <script type=\"text/javascript\">
                                \$(document).ready(function () {
    var intputElements = document.getElementsByTagName(\"INPUT\");
    for (var i = 0; i < intputElements.length; i++) {
        intputElements[i].oninvalid = function (e) {
            e.target.setCustomValidity(\"\");
            if (!e.target.validity.valid) {
                if (e.target.name === \"username\") {
                    e.target.setCustomValidity(\"Vous devez entrer un pseudonyme!\");
                }
                else {
                    e.target.setCustomValidity(\"Vous devez entrer un mot de passe!\");
                }
            }
        };
    }
})
                            </script>

";
    }

    public function getTemplateName()
    {
        return "atnUserBundle:Registration:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 34,  65 => 28,  51 => 17,  45 => 14,  41 => 13,  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* */
/* {% extends "atnUserBundle::layout.html.twig" %}*/
/* */
/* {% block user_content %}*/
/*     <div class="row " >*/
/* */
/*         <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">*/
/*             <div class="panel modal-dialog modal-content">*/
/*                 <div class=" panel-heading">*/
/*                     <strong>   Entrez vos identifiants  </strong>  */
/*                 </div>*/
/*                 <div class="panel-body">*/
/*                     <form   action="{{ path("fos_user_security_check") }}" method="post">*/
/*                         <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                         <div class="form-group input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-tag"></i></span>*/
/*                             <input type="text" class="form-control" id="username" name="_username" value="{{ last_username }}" required="required"  placeholder=" pseudonyme"  data-toggle="tooltip" data-placement="right">*/
/*                         </div>*/
/*                         <div class="form-group input-group">*/
/*                             <span class="input-group-addon"><i class="fa fa-lock"></i></span>*/
/*                             <input type="password" class="form-control" id="password" name="_password" required="required" placeholder="mot de passe">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="checkbox-inline">*/
/*                                 <input type="checkbox" > Se souvenir de moi*/
/*                             </label>*/
/*                             <span class="pull-right">*/
/*                                 <a href="{{path('fos_user_resetting_request')}}"  class="btn btn-link">mot de passe perdu?</a>*/
/*                             </span>*/
/*                         </div>*/
/*                        */
/*                             <button type="submit" id="_submit" name="_submit"  class="btn btn-success">Connectez-vous&nbsp&nbsp<span class="glyphicon glyphicon-chevron-right"></span></button>*/
/* */
/*                             <a href="{{ path('fos_user_registration_register') }}" id="_submit" name="_submit"  type="button" class=" btn btn-danger btn-inscri" >Inscrivez-vous&nbsp&nbsp <span class="glyphicon glyphicon-chevron-right"></span></a>*/
/*                          */
/*                     </form>*/
/*                 </div>*/
/* */
/*             </div>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/*                             <script type="text/javascript">*/
/*                                 $(document).ready(function () {*/
/*     var intputElements = document.getElementsByTagName("INPUT");*/
/*     for (var i = 0; i < intputElements.length; i++) {*/
/*         intputElements[i].oninvalid = function (e) {*/
/*             e.target.setCustomValidity("");*/
/*             if (!e.target.validity.valid) {*/
/*                 if (e.target.name === "username") {*/
/*                     e.target.setCustomValidity("Vous devez entrer un pseudonyme!");*/
/*                 }*/
/*                 else {*/
/*                     e.target.setCustomValidity("Vous devez entrer un mot de passe!");*/
/*                 }*/
/*             }*/
/*         };*/
/*     }*/
/* })*/
/*                             </script>*/
/* */
/* {% endblock user_content %}*/
/* */
