<?php

/* EspritFrontBundle:Default:index.html.twig */
class __TwigTemplate_f827ceca9cba37d97ddaae051c0336716dbf76d94e4ebb1402039ae73bc89caa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontBundle:Default:base.html.twig", "EspritFrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontBundle:Default:base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "<input id=\"lat\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["latitude"]) ? $context["latitude"] : $this->getContext($context, "latitude")), "html", null, true);
        echo "\"/>
<input id=\"lng\" value=\"";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["longitude"]) ? $context["longitude"] : $this->getContext($context, "longitude")), "html", null, true);
        echo "\"/>
<div id=\"googleMap\" style=\"width:500px;height:380px;\"></div>

";
    }

    public function getTemplateName()
    {
        return "EspritFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritFrontBundle:Default:base.html.twig" %}*/
/* {% block container %}*/
/* <input id="lat" value="{{latitude}}"/>*/
/* <input id="lng" value="{{longitude}}"/>*/
/* <div id="googleMap" style="width:500px;height:380px;"></div>*/
/* */
/* {% endblock %}*/
