<?php

/* atnUserBundle:Security:login_content.html.twig */
class __TwigTemplate_d1211887a59a7f787ee2f4732e0f55a7429f972ca6024650ea4aa02c0632b095 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('user_content', $context, $blocks);
    }

    public function block_user_content($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"row \" >

        <div class=\"col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1\">
            <div class=\"panel modal-dialog modal-content\">
                <div class=\" panel-heading\">
                    <strong>   Entrez vos identifiants  </strong>  
                </div>
                <div class=\"panel-body\">
                    <form   action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                        <div class=\"form-group input-group\">
                            <span class=\"input-group-addon\"><i class=\"fa fa-tag\"></i></span>
                            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"  class=\"btn btn-link\">mot de passe perdu?</a>
                            </span>
                        </div>
                       
                            <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn btn-success\">Connectez-vous&nbsp&nbsp<span class=\"glyphicon glyphicon-chevron-right\"></span></button>

                            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("atn_user_registration_register");
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
        return "atnUserBundle:Security:login_content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 31,  60 => 25,  46 => 14,  40 => 11,  36 => 10,  26 => 2,  20 => 1,);
    }
}
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
/*                             <a href="{{ path('atn_user_registration_register') }}" id="_submit" name="_submit"  type="button" class=" btn btn-danger btn-inscri" >Inscrivez-vous&nbsp&nbsp <span class="glyphicon glyphicon-chevron-right"></span></a>*/
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
