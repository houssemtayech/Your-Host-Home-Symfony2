<?php

/* EspritDarkomBundle:Default:listedetails_org.html.twig */
class __TwigTemplate_7b6f52979f0b80a8b55bf5752550b6aac8c774390736a2c12da83c771f4b549b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Client.html.twig", "EspritDarkomBundle:Default:listedetails_org.html.twig", 2);
        $this->blocks = array(
            'f' => array($this, 'block_f'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDarkomBundle:Default:Client.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_f($context, array $blocks = array())
    {
        // line 4
        echo "<h1> Détails de l'annonce </h1>
<table border =\"1\">
    <tr>
        <th> titre </th>
         <th> descreption </th>
          <th> gouvernorat </th>
          <th> delegation </th>
          <th> datedebut </th>
          <th> datefin </th>
          <th> localite </th>
             <th> superficie </th>
            <th> prix </th>
             <th> code postal </th>
             <th>  nbrepiece </th>
             <th>  Commentaires </th>
           
          
        
    </tr>
    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 24
            echo "    <tr>
        
        <td> ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "titre", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "description", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "gouvernorat", array()), "html", null, true);
            echo " </td>
        <td>  ";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "delegation", array()), "html", null, true);
            echo "</td>
         
        <td>  ";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datedebut", array()), "d/m/y"), "html", null, true);
            echo "</td>
          <td>  ";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datefin", array()), "d/m/y"), "html", null, true);
            echo "</td>
           <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "localite", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "superficie", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "prix", array()), "html", null, true);
            echo " </td>
           <td> ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "codepostal", array()), "html", null, true);
            echo " </td>
               <td> ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nbrepiece", array()), "html", null, true);
            echo " </td>
              <td> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_AfficheCommentaire", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">afficher commentaire </a> </td>
       
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</table>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:listedetails_org.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 42,  105 => 38,  101 => 37,  97 => 36,  93 => 35,  89 => 34,  85 => 33,  81 => 32,  77 => 31,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 24,  52 => 23,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "EspritDarkomBundle:Default:Client.html.twig"%}*/
/* {%block  f %}*/
/* <h1> Détails de l'annonce </h1>*/
/* <table border ="1">*/
/*     <tr>*/
/*         <th> titre </th>*/
/*          <th> descreption </th>*/
/*           <th> gouvernorat </th>*/
/*           <th> delegation </th>*/
/*           <th> datedebut </th>*/
/*           <th> datefin </th>*/
/*           <th> localite </th>*/
/*              <th> superficie </th>*/
/*             <th> prix </th>*/
/*              <th> code postal </th>*/
/*              <th>  nbrepiece </th>*/
/*              <th>  Commentaires </th>*/
/*            */
/*           */
/*         */
/*     </tr>*/
/*     {% for  evenement in offre %}*/
/*     <tr>*/
/*         */
/*         <td> {{evenement.titre}} </td>*/
/*         <td> {{evenement.description}} </td>*/
/*         <td> {{evenement.gouvernorat}} </td>*/
/*         <td>  {{evenement.delegation}}</td>*/
/*          */
/*         <td>  {{evenement.datedebut|date('d/m/y')}}</td>*/
/*           <td>  {{evenement.datefin|date('d/m/y')}}</td>*/
/*            <td> {{evenement.localite}} </td>*/
/*             <td> {{evenement.superficie}} </td>*/
/*             <td> {{evenement.prix}} </td>*/
/*            <td> {{evenement.codepostal}} </td>*/
/*                <td> {{evenement.nbrepiece}} </td>*/
/*               <td> <a href="{{path('esprit_AfficheCommentaire',{'id':evenement.id})}}">afficher commentaire </a> </td>*/
/*        */
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/* {%endblock %}*/
