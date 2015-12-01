<?php

/* atnUserBundle::layout.html.twig */
class __TwigTemplate_002cde512a2cd2e2a794482b4de25ab259b6547b0365c24ead48bd952894e6f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layoutNotConnected.html.twig", "atnUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'block_body' => array($this, 'block_block_body'),
            'user_content' => array($this, 'block_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutNotConnected.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_block_body($context, array $blocks = array())
    {
        // line 3
        echo "    <div>
        ";
        // line 4
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 5
            echo "            <form action=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                <button  type=\"submit\" class=\"btn btn-default\">Déconnexion</button>

            </form>
            ";
            // line 13
            echo "        ";
        } else {
            // line 14
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"></a>
        ";
        }
        // line 16
        echo "    </div> 

    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "all", array()));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "            <div class=\"";
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "\">
                ";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
    <div>
        ";
        // line 27
        $this->displayBlock('user_content', $context, $blocks);
        // line 29
        echo "    </div>

";
    }

    // line 27
    public function block_user_content($context, array $blocks = array())
    {
        // line 28
        echo "        ";
    }

    public function getTemplateName()
    {
        return "atnUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  99 => 27,  93 => 29,  91 => 27,  87 => 25,  81 => 24,  72 => 21,  67 => 20,  62 => 19,  58 => 18,  54 => 16,  48 => 14,  45 => 13,  37 => 5,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends "::layoutNotConnected.html.twig" %}*/
/* {% block block_body %}*/
/*     <div>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             <form action="{{ path('fos_user_security_logout') }}">*/
/*                 <button  type="submit" class="btn btn-default">Déconnexion</button>*/
/* */
/*             </form>*/
/*             {#  {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*               <a href="{{ path('fos_user_security_logout') }}">*/
/*                   {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*               </a>#}*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}"></a>*/
/*         {% endif %}*/
/*     </div> */
/* */
/*     {% for type, messages in app.session.flashBag.all %}*/
/*         {% for message in messages %}*/
/*             <div class="{{ type }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/* */
/*     <div>*/
/*         {% block user_content %}*/
/*         {% endblock user_content %}*/
/*     </div>*/
/* */
/* {% endblock block_body %}*/
/* */
/* */
