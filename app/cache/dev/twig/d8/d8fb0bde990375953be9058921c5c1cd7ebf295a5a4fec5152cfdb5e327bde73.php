<?php

/* EspritDarkomBundle:Offre:listeEvenement_org.html.twig */
class __TwigTemplate_f750a4e55d505a6cb8bd18534257bfe31dcb761aebb65348baa899d608218d07 extends Twig_Template
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
        echo "<h1> liste de vos annonces </h1>
<table border =\"100\">
    <tr>
        <th> titre </th>
         <th> descreption </th>
          <th> gouvernorat </th>
          <th> delegation </th>
          <th> datedebut </th>
          <th> datefin </th>
          <th> localite </th>
          <th> prix </th>
          <th> show picture1</th>
           
          
        <th> supprimer </th>
        <th> modifier </th>
    </tr>
    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 20
            echo "    <tr>
        
        <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "titre", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "description", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "gouvernorat", array()), "html", null, true);
            echo " </td>
        <td>  ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "delegation", array()), "html", null, true);
            echo "</td>
         
        <td>  ";
            // line 27
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datedebut", array()), "d/M/Y"), "html", null, true);
            echo "</td>
          <td>  ";
            // line 28
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datefin", array()), "d/M/Y"), "html", null, true);
            echo "</td>
           <td> ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "localite", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "prix", array()), "html", null, true);
            echo " </td>

            <td> 
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image_route", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_my_image_route", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\" alt=\"\"width=\"120\" height=\"80\"/>
                </a>
            </td>

        
        
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Offre:listeEvenement_org.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 42,  85 => 34,  81 => 33,  75 => 30,  71 => 29,  67 => 28,  63 => 27,  58 => 25,  54 => 24,  50 => 23,  46 => 22,  42 => 20,  38 => 19,  19 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <h1> liste de vos annonces </h1>*/
/* <table border ="100">*/
/*     <tr>*/
/*         <th> titre </th>*/
/*          <th> descreption </th>*/
/*           <th> gouvernorat </th>*/
/*           <th> delegation </th>*/
/*           <th> datedebut </th>*/
/*           <th> datefin </th>*/
/*           <th> localite </th>*/
/*           <th> prix </th>*/
/*           <th> show picture1</th>*/
/*            */
/*           */
/*         <th> supprimer </th>*/
/*         <th> modifier </th>*/
/*     </tr>*/
/*     {% for  evenement in offre %}*/
/*     <tr>*/
/*         */
/*         <td> {{evenement.titre}} </td>*/
/*         <td> {{evenement.description}} </td>*/
/*         <td> {{evenement.gouvernorat}} </td>*/
/*         <td>  {{evenement.delegation}}</td>*/
/*          */
/*         <td>  {{evenement.datedebut|date('d/M/Y')}}</td>*/
/*           <td>  {{evenement.datefin|date('d/M/Y')}}</td>*/
/*            <td> {{evenement.localite}} </td>*/
/*             <td> {{evenement.prix}} </td>*/
/* */
/*             <td> */
/*                 <a href="{{path("esprit_darkom_my_image_route", {'id':evenement.id })}}">*/
/*                     <img src="{{path('esprit_darkom_my_image_route',{'id':evenement.id})}}" alt=""width="120" height="80"/>*/
/*                 </a>*/
/*             </td>*/
/* */
/*         */
/*         */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
