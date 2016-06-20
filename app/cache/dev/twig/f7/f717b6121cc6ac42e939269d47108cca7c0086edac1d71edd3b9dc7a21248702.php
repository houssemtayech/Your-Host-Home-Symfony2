<?php

/* EspritDarkomBundle:Default:listeEvenement_org.html.twig */
class __TwigTemplate_527f4e7f7156f38228e9d01cbed3bb2b1c7737e3f8323ae40ebb83b50bd0ae3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Annonceur.html.twig", "EspritDarkomBundle:Default:listeEvenement_org.html.twig", 2);
        $this->blocks = array(
            'formulaire1' => array($this, 'block_formulaire1'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDarkomBundle:Default:Annonceur.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formulaire1($context, array $blocks = array())
    {
        // line 4
        echo "    <html>
        <head>
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" 
        </head>
        <body>
             <form method=\"POST\" style=\"background-color: #d9d9d9\">
<h1> liste de vos annonces </h1>
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
         
           
          
        <th> supprimer </th>
        <th> modifier </th>
    </tr>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 31
            echo "    <tr>
        
        <td> ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "titre", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "description", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "gouvernorat", array()), "html", null, true);
            echo " </td>
        <td>  ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "delegation", array()), "html", null, true);
            echo "</td>
         
        <td>  ";
            // line 38
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datedebut", array()), "d/m/y"), "html", null, true);
            echo "</td>
          <td>  ";
            // line 39
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datefin", array()), "d/m/y"), "html", null, true);
            echo "</td>
           <td> ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "localite", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "superficie", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "prix", array()), "html", null, true);
            echo " </td>
           <td> ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "codepostal", array()), "html", null, true);
            echo " </td>
               <td>  S+";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nbrepiece", array()), "html", null, true);
            echo " </td>
        
        <td><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_supprimer", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">Supprimer</a></td>
        <td><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_modifier1", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">modifier</a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "</table>
             </form>
          </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:listeEvenement_org.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 50,  120 => 47,  116 => 46,  111 => 44,  107 => 43,  103 => 42,  99 => 41,  95 => 40,  91 => 39,  87 => 38,  82 => 36,  78 => 35,  74 => 34,  70 => 33,  66 => 31,  62 => 30,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   {% extends "EspritDarkomBundle:Default:Annonceur.html.twig"%}*/
/* {%block  formulaire1 %}*/
/*     <html>*/
/*         <head>*/
/*              <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" */
/*         </head>*/
/*         <body>*/
/*              <form method="POST" style="background-color: #d9d9d9">*/
/* <h1> liste de vos annonces </h1>*/
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
/*           <th> prix </th>*/
/*              <th> code postal </th>*/
/*              <th>  nbrepiece </th>*/
/*          */
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
/*         <td>  {{evenement.datedebut|date('d/m/y')}}</td>*/
/*           <td>  {{evenement.datefin|date('d/m/y')}}</td>*/
/*            <td> {{evenement.localite}} </td>*/
/*             <td> {{evenement.superficie}} </td>*/
/*             <td> {{evenement.prix}} </td>*/
/*            <td> {{evenement.codepostal}} </td>*/
/*                <td>  S+{{evenement.nbrepiece}} </td>*/
/*         */
/*         <td><a href="{{path('esprit_darkom_supprimer',{'id':evenement.id})}}">Supprimer</a></td>*/
/*         <td><a href="{{path('esprit_darkom_modifier1',{'id':evenement.id})}}">modifier</a></td>*/
/*     </tr>*/
/*     {% endfor %}*/
/* </table>*/
/*              </form>*/
/*           </body>*/
/*     </html>*/
/* {%endblock %}         */
