<?php

/* EspritDarkomBundle:Default:mail.html.twig */
class __TwigTemplate_530d1591ea150f9938e0a0a8a3e209c268e4a382f25f6bad68259563edba8336 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:email.html.twig", "EspritDarkomBundle:Default:mail.html.twig", 1);
        $this->blocks = array(
            'taw' => array($this, 'block_taw'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDarkomBundle:Default:email.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_taw($context, array $blocks = array())
    {
        // line 3
        echo "<body> Votre demande a été envoyée avec succès </body>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {%extends "EspritDarkomBundle:Default:email.html.twig" %}*/
/* {%block taw %}*/
/* <body> Votre demande a été envoyée avec succès </body>*/
/* {%endblock%}*/
