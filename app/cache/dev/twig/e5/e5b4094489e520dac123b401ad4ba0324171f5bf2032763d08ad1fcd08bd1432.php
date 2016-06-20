<?php

/* EspritUserBundle:Registration:registration.email.twig */
class __TwigTemplate_0d49b5772c5bfa04ed2e1876782bb91b3d3b29969a4d0f89746234b04e91e597 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('subject', $context, $blocks);
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        echo "
";
        // line 14
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 1
    public function block_subject($context, array $blocks = array())
    {
        echo "Confirmation d'inscription";
    }

    // line 3
    public function block_body_text($context, array $blocks = array())
    {
        // line 5
        echo "Bonjour ";
        echo $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array());
        echo " !

Vous devez confirmé voter inscription [....] en cliquant sur le lien suivant : ";
        // line 7
        echo (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"));
        echo "

Amicalement,
Administrateur de monsiteweb.com
";
    }

    // line 14
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:Registration:registration.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  51 => 7,  45 => 5,  42 => 3,  36 => 1,  32 => 14,  29 => 13,  27 => 3,  24 => 2,  22 => 1,);
    }
}
/* {% block subject %}Confirmation d'inscription{% endblock %}*/
/* */
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* Bonjour {{ user.username }} !*/
/* */
/* Vous devez confirmé voter inscription [....] en cliquant sur le lien suivant : {{ confirmationUrl }}*/
/* */
/* Amicalement,*/
/* Administrateur de monsiteweb.com*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* */
/* {% block body_html %}*/
/* {#*/
/*     Vous pouvez ici définir le HTML que vous souhaitez ou même utiliser la force de twig, à savoir l'inclusion de template : */
/*     include 'MyAppMonBundle:User:registration_email.html.twig'*/
/* #}*/
/* {% endblock %}*/
