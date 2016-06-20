<?php

/* EspritDarkomBundle:Offre:list.html.twig */
class __TwigTemplate_10598e1c4aec674026c67e05c76b53abd6ca34052789b13dd7aaa23e6adcb3c3 extends Twig_Template
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
<table border=1>
    <tr>
        <th> ID </th>
        <th> titre </th>
        <th> type </th>
        <th> nbrepiece </th>
        <th> superficie </th>
        <th> prix </th>
        <th> description </th>
        <th> gouvernorat </th>
        <th> delegation </th>
        <th> localite </th>
        <th> codepostal </th>
        <th> image1 </th>
        <th> image2 </th>
        <th> image3 </th>
        <th> Approuver </th>
        <th> Désapprouver </th>
        

    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Offre"]) ? $context["Offre"] : $this->getContext($context, "Offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["offres"]) {
            // line 24
            echo "
        <tr>
            <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "id", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "titre", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "type", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "nbrepiece", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "superficie", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "prix", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "description", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "gouvernorat", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "delegation", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "localite", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "codepostal", array()), "html", null, true);
            echo " </td>
            <td> <img  src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image_route", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" /> </td>
            <td> <img  src=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image1_route", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" /> </td>
            <td> <img  src=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image2_route", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"120\" height=\"80\" /> </td>
            <td> <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_accepter_offre", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\"> Approuver </td>
            <td> <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_refuser_offre", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\"> Désapprouver </td>
            
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

</table>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Offre:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 46,  111 => 41,  107 => 40,  103 => 39,  99 => 38,  95 => 37,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  59 => 28,  55 => 27,  51 => 26,  47 => 24,  43 => 23,  19 => 1,);
    }
}
/* */
/* <table border=1>*/
/*     <tr>*/
/*         <th> ID </th>*/
/*         <th> titre </th>*/
/*         <th> type </th>*/
/*         <th> nbrepiece </th>*/
/*         <th> superficie </th>*/
/*         <th> prix </th>*/
/*         <th> description </th>*/
/*         <th> gouvernorat </th>*/
/*         <th> delegation </th>*/
/*         <th> localite </th>*/
/*         <th> codepostal </th>*/
/*         <th> image1 </th>*/
/*         <th> image2 </th>*/
/*         <th> image3 </th>*/
/*         <th> Approuver </th>*/
/*         <th> Désapprouver </th>*/
/*         */
/* */
/*     </tr>*/
/*     {% for offres in Offre %}*/
/* */
/*         <tr>*/
/*             <td> {{offres.id}} </td>*/
/*             <td> {{offres.titre}} </td>*/
/*             <td> {{offres.type}} </td>*/
/*             <td> {{offres.nbrepiece}} </td>*/
/*             <td> {{offres.superficie}} </td>*/
/*             <td> {{offres.prix}} </td>*/
/*             <td> {{offres.description}} </td>*/
/*             <td> {{offres.gouvernorat}} </td>*/
/*             <td> {{offres.delegation}} </td>*/
/*             <td> {{offres.localite}} </td>*/
/*             <td> {{offres.codepostal}} </td>*/
/*             <td> <img  src="{{ path('esprit_darkom_my_image_route', { 'id': offres.id }) }}" alt="" width="120" height="80" /> </td>*/
/*             <td> <img  src="{{ path('esprit_darkom_my_image1_route', { 'id': offres.id }) }}" alt="" width="120" height="80" /> </td>*/
/*             <td> <img  src="{{ path('esprit_darkom_my_image2_route', { 'id': offres.id }) }}" alt="" width="120" height="80" /> </td>*/
/*             <td> <a href="{{path('esprit_darkom_accepter_offre',{'id':offres.id})}}"> Approuver </td>*/
/*             <td> <a href="{{path('esprit_darkom_refuser_offre',{'id':offres.id})}}"> Désapprouver </td>*/
/*             */
/*         </tr>*/
/* */
/*     {% endfor %}*/
/* */
/* */
/* </table>*/
/* */
