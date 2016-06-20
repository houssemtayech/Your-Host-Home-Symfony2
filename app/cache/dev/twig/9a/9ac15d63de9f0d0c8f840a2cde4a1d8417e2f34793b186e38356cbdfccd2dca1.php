<?php

/* DCSRatingBundle:Rating:rating.html.twig */
class __TwigTemplate_9415e9951bc3b4f733fdb20f11d07d9e00b1d04d48770917943a68b2f7e95908 extends Twig_Template
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
        // line 1
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("DCSRatingBundle:Rating:showRate", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))));
    }

    public function getTemplateName()
    {
        return "DCSRatingBundle:Rating:rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* {{ render(controller('DCSRatingBundle:Rating:showRate', {'id' : id})) }}*/
