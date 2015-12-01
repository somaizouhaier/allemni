<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_2029e80d47847ab8ee55f0e4635bd7e76cd17282f3418e7bb68c8d2c1c2b7538 extends Twig_Template
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
        // line 13
        echo "
    <div class=\"modal-dialog\">
<div class=\"modal-content\">
    
    <div class=\"modal-header header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Récupération du mot de passe</h4>
    </div>
    <form action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\"  method=\"POST\"  class=\"form-horizontal\">
   
       
 <div class=\"modal-body\" >
     <div class=\"form-group\">
         <table style=\"width: 100%\"><tr>
             <td for=\"email\" class=\"col-sm-5 control-label\"><label>";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Votre mail:", array(), "FOSUserBundle"), "html", null, true);
        echo "</label></td>
             <td> <div class=\"col-sm-10\">
        <input type=\"text\" class=\"form-control\" id=\"email\" name=\"username\" required=\"required\"  placeholder=\"email\"   data-placement=\"right\">
                
                 </div></td>
         </tr>
     </table>
  </div>
 </div>
    
    <div class=\"modal-footer\">
        
         <button type=\"submit\" id=\"_submit\" name=\"_submit\"  class=\"btn btn-success\">Envoyer&nbsp&nbsp<span class=\"glyphicon glyphicon-chevron-right\"></span></button>

    </div>
    
   </form>
    </div>
    </div>
 
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 27,  29 => 21,  19 => 13,);
    }
}
/* {#<form action="{{ path('fos_user_resetting_send_email') }}" method="POST" class="fos_user_resetting_request">*/
/*     <div>*/
/*         {% if invalid_username is defined %}*/
/*             <p>{{ 'resetting.request.invalid_username'|trans({'%username%': invalid_username}, 'FOSUserBundle') }}</p>*/
/*         {% endif %}*/
/*         <label for="username">{{ 'resetting.request.username'|trans({}, 'FOSUserBundle') }}</label>*/
/*         <input type="text" id="username" name="username" required="required" />*/
/*     </div>*/
/*     <div>*/
/*         <input type="submit" value="{{ 'resetting.request.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* </form>#}*/
/* */
/*     <div class="modal-dialog">*/
/* <div class="modal-content">*/
/*     */
/*     <div class="modal-header header">*/
/*         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>*/
/*         <h4 class="modal-title" id="myModalLabel">Récupération du mot de passe</h4>*/
/*     </div>*/
/*     <form action="{{ path('fos_user_resetting_send_email') }}"  method="POST"  class="form-horizontal">*/
/*    */
/*        */
/*  <div class="modal-body" >*/
/*      <div class="form-group">*/
/*          <table style="width: 100%"><tr>*/
/*              <td for="email" class="col-sm-5 control-label"><label>{{ 'Votre mail:'|trans({}, 'FOSUserBundle') }}</label></td>*/
/*              <td> <div class="col-sm-10">*/
/*         <input type="text" class="form-control" id="email" name="username" required="required"  placeholder="email"   data-placement="right">*/
/*                 */
/*                  </div></td>*/
/*          </tr>*/
/*      </table>*/
/*   </div>*/
/*  </div>*/
/*     */
/*     <div class="modal-footer">*/
/*         */
/*          <button type="submit" id="_submit" name="_submit"  class="btn btn-success">Envoyer&nbsp&nbsp<span class="glyphicon glyphicon-chevron-right"></span></button>*/
/* */
/*     </div>*/
/*     */
/*    </form>*/
/*     </div>*/
/*     </div>*/
/*  */
/* */
