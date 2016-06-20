<?php

/* EspritDarkomBundle:Offre:list1.html.twig */
class __TwigTemplate_d8c50ff42437f8dbdfdc94575f05751fa4e1f1e9a0a09a40ccaf47ac9e93970d extends Twig_Template
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
        echo "

<table border=\"2\">

    <tr>
        <th> Id </th>
        <th> Title</th>
        <th> Show picture1 </th>
        <th> Show picture2 </th>
        <th> Show picture3 </th>
    </tr>
    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 13
            echo "
        <tr>
            <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "id", array()), "html", null, true);
            echo "</th>
            <th>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "titre", array()), "html", null, true);
            echo "</th>
            <th>
                <img  src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image_route", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" />
            </th>
            <th>
                <img  src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image1_route", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" />
            </th>
            <th>
                <img  src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image2_route", array("id" => $this->getAttribute($context["image"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" />
            </th>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Offre:list1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 28,  61 => 24,  55 => 21,  49 => 18,  44 => 16,  40 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* */
/* */
/* <table border="2">*/
/* */
/*     <tr>*/
/*         <th> Id </th>*/
/*         <th> Title</th>*/
/*         <th> Show picture1 </th>*/
/*         <th> Show picture2 </th>*/
/*         <th> Show picture3 </th>*/
/*     </tr>*/
/*     {% for image in offre %}*/
/* */
/*         <tr>*/
/*             <th>{{image.id}}</th>*/
/*             <th>{{image.titre}}</th>*/
/*             <th>*/
/*                 <img  src="{{ path('esprit_darkom_my_image_route', { 'id': image.id }) }}" alt="" width="120" height="80" />*/
/*             </th>*/
/*             <th>*/
/*                 <img  src="{{ path('esprit_darkom_my_image1_route', { 'id': image.id }) }}" alt="" width="120" height="80" />*/
/*             </th>*/
/*             <th>*/
/*                 <img  src="{{ path('esprit_darkom_my_image2_route', { 'id': image.id }) }}" alt="" width="120" height="80" />*/
/*             </th>*/
/*         </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* */
