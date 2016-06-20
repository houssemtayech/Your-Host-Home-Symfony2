<?php

/* EspritDarkomBundle:Default:index.html.twig */
class __TwigTemplate_0bd717d92d6b0d372039304a061e254aa7cd1086dec7769040f725eb348b4102 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:layout.html.twig", "EspritDarkomBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDarkomBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }
}
/* {% extends "EspritDarkomBundle:Default:layout.html.twig" %}*/
/* */
