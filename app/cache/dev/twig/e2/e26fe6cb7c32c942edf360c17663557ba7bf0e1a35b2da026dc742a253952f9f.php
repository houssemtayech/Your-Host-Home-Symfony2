<?php

/* EspritDarkomBundle:Offre:list2.html.twig */
class __TwigTemplate_dd6344f54fc0c8ee1410780eedabf8853aaaf10de82e15fb61926ac8b0b3365a extends Twig_Template
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
        echo "<h1>";
        echo twig_escape_filter($this->env, (isset($context["nbr"]) ? $context["nbr"] : $this->getContext($context, "nbr")), "html", null, true);
        echo "</h1>";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Offre:list2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h1>{{ nbr }}</h1>*/
