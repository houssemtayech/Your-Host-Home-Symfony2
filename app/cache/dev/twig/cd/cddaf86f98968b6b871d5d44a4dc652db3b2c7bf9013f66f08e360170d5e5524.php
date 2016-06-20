<?php

/* EspritUserBundle:Registration:register.html.twig */
class __TwigTemplate_7ccd2894abcdb7c8b405445138c4fbac678b8934d63e466dfe85077e86d0cd92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::inscription.html.twig", "EspritUserBundle:Registration:register.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::inscription.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    
";
        // line 5
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "EspritUserBundle:Registration:register.html.twig", 5)->display($context);
    }

    public function getTemplateName()
    {
        return "EspritUserBundle:Registration:register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::inscription.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/*     */
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
