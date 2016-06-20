<?php

/* EspritUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_1eda28619f68c285877922de3f6a5ec39f82261655e87880eb605fe8d79dba34 extends Twig_Template
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
        // line 2
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
    <div>
    <div class=\"form-group\">
\t
\t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("placeHolder" => "Nom...")));
        echo "
  
\t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("placeHolder" => "Prenom...")));
        echo "
    </div>
       
<div class=\"form-group\">
\t
\t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("placeHolder" => "Login...")));
        echo "
       

\t
\t";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Telephone", array()), 'widget', array("attr" => array("placeHolder" => "Telephone...")));
        echo "
</div>
  
\t<div class=\"form-group\">
\t
\t";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("placeHolder" => "Mot de passe ...")));
        echo "
       ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("placeHolder" => "Verification ...")));
        echo "
        </div>
        <div  align=\"center\">
     
\t ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("placeHolder" => "Email ...")));
        echo "
\t";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget');
        echo "
</div>
    </div>
    <div>
          <input type=\"submit\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>

 ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    
    
    
    
   

";
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 35,  76 => 32,  69 => 28,  65 => 27,  58 => 23,  54 => 22,  46 => 17,  39 => 13,  31 => 8,  26 => 6,  19 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*     <div>*/
/*     <div class="form-group">*/
/* 	*/
/* 	{{ form_widget(form.nom,{'attr': {'placeHolder': 'Nom...'} }) }}*/
/*   */
/* 	{{ form_widget(form.prenom,{'attr': {'placeHolder': 'Prenom...'} }) }}*/
/*     </div>*/
/*        */
/* <div class="form-group">*/
/* 	*/
/* 	{{ form_widget(form.username,{'attr': {'placeHolder': 'Login...'} }) }}*/
/*        */
/* */
/* 	*/
/* 	{{ form_widget(form.Telephone,{'attr': {'placeHolder': 'Telephone...'} }) }}*/
/* </div>*/
/*   */
/* 	<div class="form-group">*/
/* 	*/
/* 	{{ form_widget(form.plainPassword.first,{'attr': {'placeHolder': 'Mot de passe ...'} }) }}*/
/*        {{ form_widget(form.plainPassword.second,{'attr': {'placeHolder': 'Verification ...'} }) }}*/
/*         </div>*/
/*         <div  align="center">*/
/*      */
/* 	 {{ form_widget(form.email,{'attr': {'placeHolder': 'Email ...'} }) }}*/
/* 	{{ form_widget(form.roles) }}*/
/* </div>*/
/*     </div>*/
/*     <div>*/
/*           <input type="submit" value="{{ 'registration.submit'|trans({}, 'FOSUserBundle') }}" />*/
/*     </div>*/
/* */
/*  {{form_end(form) }}*/
/*     */
/*     */
/*     */
/*     */
/*    */
/* */
/* */
