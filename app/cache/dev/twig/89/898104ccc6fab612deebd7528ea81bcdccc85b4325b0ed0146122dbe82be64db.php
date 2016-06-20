<?php

/* EspritDarkomBundle:Default:new.html.twig */
class __TwigTemplate_6d3cf8b054eb75d8b69dc3fdc113693a9be5cb002a7111b1b4dc53909b831c8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritTestBundle:Test:popupmail.html.twig", "EspritDarkomBundle:Default:new.html.twig", 1);
        $this->blocks = array(
            'chams' => array($this, 'block_chams'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritTestBundle:Test:popupmail.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_chams($context, array $blocks = array())
    {
        // line 3
        echo "
<body> 
    <h2>
        <strong> Formulaire De Contact</strong>
    </h2> 
    <hr> 
    <h3>
        <p> Contacter nous </p>
    </h3> 


    <form role=\"form\" id=\"fr\" method=\"POST\" action='";
        // line 14
        echo $this->env->getExtension('routing')->getPath("esprit_test_mail_sendpage");
        echo "'>
        <p class=\"form-group form-control-wrap your-subject\">
            <span >
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nom", array()), 'widget');
        echo "
            </span>
        </p>
        <p class=\"form-group form-control-wrap your-subject\">
            <span >
                ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "from", array()), 'widget');
        echo "
            </span>
        </p>
        <p class=\"form-group form-control-wrap your-subject\">
            <span >
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Subject", array()), 'widget');
        echo "
            </span>
            
        </p>
        <p class=\"form-group form-control-wrap your-subject\">
            <span >
                ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "text", array()), 'widget');
        echo "
            </span>
        </p>

            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
 
        
    </form>

</body>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 37,  75 => 33,  66 => 27,  58 => 22,  50 => 17,  44 => 14,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritTestBundle:Test:popupmail.html.twig" %}*/
/* {% block chams %}*/
/* */
/* <body> */
/*     <h2>*/
/*         <strong> Formulaire De Contact</strong>*/
/*     </h2> */
/*     <hr> */
/*     <h3>*/
/*         <p> Contacter nous </p>*/
/*     </h3> */
/* */
/* */
/*     <form role="form" id="fr" method="POST" action='{{path('esprit_test_mail_sendpage')}}'>*/
/*         <p class="form-group form-control-wrap your-subject">*/
/*             <span >*/
/*                 {{form_widget(form.nom)}}*/
/*             </span>*/
/*         </p>*/
/*         <p class="form-group form-control-wrap your-subject">*/
/*             <span >*/
/*                 {{form_widget(form.from)}}*/
/*             </span>*/
/*         </p>*/
/*         <p class="form-group form-control-wrap your-subject">*/
/*             <span >*/
/*                 {{form_widget(form.Subject)}}*/
/*             </span>*/
/*             */
/*         </p>*/
/*         <p class="form-group form-control-wrap your-subject">*/
/*             <span >*/
/*                 {{form_widget(form.text)}}*/
/*             </span>*/
/*         </p>*/
/* */
/*             {{ form_rest(form) }}*/
/*  */
/*         */
/*     </form>*/
/* */
/* </body>*/
/* {% endblock %}*/
