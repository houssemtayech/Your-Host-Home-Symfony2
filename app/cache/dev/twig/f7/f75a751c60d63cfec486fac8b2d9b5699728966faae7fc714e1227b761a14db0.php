<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f2458221b517427d46f2c4a737f42baa0668696a5f72ec6b535f57ab8c1647d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::authentification.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::authentification.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 5
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
";
        }
        // line 7
        echo " <form role=\"form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\"  method=\"post\" class=\"login-form\">
    
    <div class=\"form-group\">
\t<label class=\"sr-only\" for=\"username\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t<input type=\"text\" name=\"_username\" required=\"required\"  placeholder=\"Login...\" class=\"form-username form-control\" id=\"username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\">
    </div>      
    <div class=\"form-group\">
\t<label class=\"sr-only\" for=\"password\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t<input type=\"password\" name=\"_password\" placeholder=\"Mot de passe...\" class=\"form-password form-control\" id=\"password\"/>
       
    </div>
    <div class=\"form-group\">    
\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
        <label for=\"remember_me\">";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        </div>
         <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
        
        <button type=\"submit\" class=\"btn\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"> Connexion</button>
        
</form>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  70 => 22,  65 => 20,  56 => 14,  50 => 11,  46 => 10,  39 => 7,  33 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::authentification.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error|trans({}, 'FOSUserBundle') }}</div>*/
/* {% endif %}*/
/*  <form role="form" action="{{ path("fos_user_security_check") }}"  method="post" class="login-form">*/
/*     */
/*     <div class="form-group">*/
/* 	<label class="sr-only" for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>*/
/* 	<input type="text" name="_username" required="required"  placeholder="Login..." class="form-username form-control" id="username" value="{{ last_username }}" required="required">*/
/*     </div>      */
/*     <div class="form-group">*/
/* 	<label class="sr-only" for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>*/
/* 	<input type="password" name="_password" placeholder="Mot de passe..." class="form-password form-control" id="password"/>*/
/*        */
/*     </div>*/
/*     <div class="form-group">    */
/* 	<input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*         <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>*/
/*         </div>*/
/*          <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*         */
/*         <button type="submit" class="btn" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}"> Connexion</button>*/
/*         */
/* </form>*/
/* */
/* {% endblock fos_user_content %}*/
/* */
/* */
/* */
/* */
/* */
