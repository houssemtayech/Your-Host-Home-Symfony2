<?php

/* EspritDarkomBundle:Offre:affiche.html.twig */
class __TwigTemplate_d494ccfd55aab8bae8eed263a6b0bbc5338237a397ba8359a4bcc4e83f02b0e4 extends Twig_Template
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
        echo "<div>
<table border=\"2\">
    
    <tr><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('routing')->getPath("esprit_darkom_my_image_route", array("id" => $this->getAttribute((isset($context["e"]) ? $context["e"] : $this->getContext($context, "e")), "photo1", array())))), "html", null, true);
        echo "\"/></tr>
    
</table>
</div>";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Offre:affiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 4,  19 => 1,);
    }
}
/* <div>*/
/* <table border="2">*/
/*     */
/*     <tr><img src="{{ asset(path('esprit_darkom_my_image_route', {'id': e.photo1})) }}"/></tr>*/
/*     */
/* </table>*/
/* </div>*/
