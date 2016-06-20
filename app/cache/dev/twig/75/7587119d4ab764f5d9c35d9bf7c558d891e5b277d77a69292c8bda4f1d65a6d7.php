<?php

/* EspritFrontBundle:OffreDetails:OffreDetails.html.twig */
class __TwigTemplate_deff2961f6f3eec0a73ab3f6b0efde09969b1a2066425af394d7cc5d70cb7715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontBundle::layout.html.twig", "EspritFrontBundle:OffreDetails:OffreDetails.html.twig", 1);
        $this->blocks = array(
            'audioA' => array($this, 'block_audioA'),
            'container' => array($this, 'block_container'),
            'wezza' => array($this, 'block_wezza'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_audioA($context, array $blocks = array())
    {
        // line 6
        echo "    <left>
        <div class=\"dt-sc-one-half column\">

            <iframe  width=\"550\" height=\"100\" src=\"https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/153425116&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true\"></iframe>
    </left>  

";
    }

    // line 13
    public function block_container($context, array $blocks = array())
    {
        // line 14
        echo "    <div class=\"container\">

        <div class=\"booking-item-details\">
           
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"tabbable booking-details-tabbable\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <h1> Détails de l'annonce </h1>
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
             
           
          
        
    </tr>
    ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["offre"]) ? $context["offre"] : $this->getContext($context, "offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["evenement"]) {
            // line 42
            echo "    <tr>
        
        <td> ";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "titre", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "description", array()), "html", null, true);
            echo " </td>
        <td> ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "gouvernorat", array()), "html", null, true);
            echo " </td>
        <td>  ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "delegation", array()), "html", null, true);
            echo "</td>
         
        <td>  ";
            // line 49
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datedebut", array()), "d/m/y"), "html", null, true);
            echo "</td>
          <td>  ";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["evenement"], "datefin", array()), "d/m/y"), "html", null, true);
            echo "</td>
           <td> ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "localite", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "superficie", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "prix", array()), "html", null, true);
            echo " </td>
           <td> ";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "codepostal", array()), "html", null, true);
            echo " </td>
               <td> ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["evenement"], "nbrepiece", array()), "html", null, true);
            echo " </td>
           
       
    </tr>
    
</table>
<br>
<br>
<form method=\"POST\"  action=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reserver", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo "\">
<input class=\"btn btn-primary\" type=\"submit\" value=\"Reserver\"  /></form>
<br>


                            <h4><a href=";
            // line 68
            echo $this->env->getExtension('routing')->getPath("esprit_map_homepage");
            echo "><i class=\"fa fa-map-marker\"></i> On the Map</a></h4>
                            
                            <br>
                            
                            <h4><a href=";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("notemoyenne", array("id" => $this->getAttribute($context["evenement"], "id", array()))), "html", null, true);
            echo " ><i class=\"fa fa-pencil\"></i> Note moyenne</a></h4>
                        
                        </ul>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['evenement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                     
                </div>
                <div class=\"col-md-6\">
                    <div class=\"booking-item-meta\">
                       
                        
                        <div class=\"booking-item-rating\">
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class=\"gap gap-small\"></div>

        </div>

        <h3 class=\"mb20\">Commentaires concernant cette offre de maison</h3>
        <div class=\"row row-wrap\">
            <div class=\"col-md-8\">
                <ul class=\"booking-item-reviews list\">
                 ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comm"]) ? $context["comm"] : $this->getContext($context, "comm")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
            // line 102
            echo "                        <li>
                            <div class=\"row\">

                                <div class=\"col-md-10\">
                                    <div class=\"booking-item-review-content\">
                                        
                                        <p>commentaire:";
            // line 108
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "commentaire", array()), "html", null, true);
            echo "</p>
                                       
                                        <p> note=";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute($context["commentaire"], "note", array()), "html", null, true);
            echo "</p>
                                        <p><span class=\"booking-item-review-more\"> </span>
                                        </p>
                                        
                                        <div class=\"booking-item-review-expand\"><span class=\"booking-item-review-expand-more\">Plus <i class=\"fa fa-angle-down\"></i></span><span class=\"booking-item-review-expand-less\">Less <i class=\"fa fa-angle-up\"></i></span>
                                        </div>
                                        <ul class=\"list list-inline text-small\">

                                            <li><a href=";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_updateCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()))), "html", null, true);
            echo "><i class=\"fa fa-pencil\"></i>Modifier </a>
                                            </li>

                                            ";
            // line 121
            $this->displayBlock('wezza', $context, $blocks);
            // line 124
            echo "
                                            <li><a href=";
            // line 125
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_deleteCommentaire", array("id" => $this->getAttribute($context["commentaire"], "id", array()), "idOffre" => $this->getAttribute($context["commentaire"], "idoffre", array()))), "html", null, true);
            echo "><i class=\"fa fa-cut\"></i>Supprimer </a>
                                            </li>
                                        </ul> 
                                    </div>
                                </div>
                            </div>
                        </li>
                    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commentaire'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "   

                </ul>

                <div class=\"row wrap\">

                    <div class=\"col-md-7\">
                        <ul class=\"pagination\">
                            <li class=\"active\"><a href=";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">1</a>
                            </li>
                            <li><a href=";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">2</a>
                            </li>
                            <li><a href=";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">3</a>
                            </li>
                            <li><a href=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">4</a>
                            </li>
                            <li><a href=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">5</a>
                            </li>
                            <li><a href=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">6</a>
                            </li>
                            <li><a href=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">7</a>
                            </li>
                            <li class=\"dots\">...</li>
                            <li><a href=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">43</a>
                            </li>
                            <li class=\"next\"><a href=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("#"), "html", null, true);
        echo ">Next Page</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=\"gap gap-small\">
                    <div class=\"box bg-gray\">
                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                            <li class=\"active\"><a data-toggle=\"tab\"><i class=\"fa fa-pencil-square\">Ecrire votre commentaire</i></a>
                            </li>

                        </ul>


                        <h3> Commentaire </h3>
                        <form method=\"POST\"  action=\"";
        // line 173
        echo $this->env->getExtension('routing')->getPath("esprit_ajoutCommentaire");
        echo "\">
                            <div class=\"row\">
                                <div class=\"col-md-8\">

                                    <div class=\"form-group\">
                                        <textarea name=\"commentaire\" class=\"form-control\" rows=\"8\"  placeholder=\"Tapez votre commentaire...\"></textarea>
                                    </div>

                                    <input class=\"btn btn-primary\" type=\"submit\" value=\"Publier\"  />
                                    <input class=\"btn btn-primary\" type=\"reset\" value=\"Annuler\" />
                                        
                                   
                                </div>
                            </div>
                            
                        </form>
                            </div>
                    </div>
                </div>

            </div>
                            
        </div>
    </div>
    <div class=\"gap gap-small\"></div>

";
    }

    // line 121
    public function block_wezza($context, array $blocks = array())
    {
        // line 122
        echo "
                                            ";
    }

    public function getTemplateName()
    {
        return "EspritFrontBundle:OffreDetails:OffreDetails.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  366 => 122,  363 => 121,  332 => 173,  313 => 157,  308 => 155,  302 => 152,  297 => 150,  292 => 148,  287 => 146,  282 => 144,  277 => 142,  272 => 140,  262 => 132,  240 => 125,  237 => 124,  235 => 121,  229 => 118,  218 => 110,  213 => 108,  205 => 102,  188 => 101,  160 => 75,  150 => 72,  143 => 68,  135 => 63,  124 => 55,  120 => 54,  116 => 53,  112 => 52,  108 => 51,  104 => 50,  100 => 49,  95 => 47,  91 => 46,  87 => 45,  83 => 44,  79 => 42,  75 => 41,  46 => 14,  43 => 13,  33 => 6,  30 => 5,  11 => 1,);
    }
}
/* {% extends "EspritFrontBundle::layout.html.twig" %}*/
/* */
/* */
/* */
/* {% block audioA %}*/
/*     <left>*/
/*         <div class="dt-sc-one-half column">*/
/* */
/*             <iframe  width="550" height="100" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/153425116&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>*/
/*     </left>  */
/* */
/* {% endblock %}*/
/* {% block container %}*/
/*     <div class="container">*/
/* */
/*         <div class="booking-item-details">*/
/*            */
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <div class="tabbable booking-details-tabbable">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <h1> Détails de l'annonce </h1>*/
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
/*              */
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
/*            */
/*        */
/*     </tr>*/
/*     */
/* </table>*/
/* <br>*/
/* <br>*/
/* <form method="POST"  action="{{path('reserver',{'id':evenement.id})}}">*/
/* <input class="btn btn-primary" type="submit" value="Reserver"  /></form>*/
/* <br>*/
/* */
/* */
/*                             <h4><a href={{path('esprit_map_homepage')}}><i class="fa fa-map-marker"></i> On the Map</a></h4>*/
/*                             */
/*                             <br>*/
/*                             */
/*                             <h4><a href={{path('notemoyenne',{'id':evenement.id})}} ><i class="fa fa-pencil"></i> Note moyenne</a></h4>*/
/*                         */
/*                         </ul>*/
/*   {% endfor %}                     */
/*                 </div>*/
/*                 <div class="col-md-6">*/
/*                     <div class="booking-item-meta">*/
/*                        */
/*                         */
/*                         <div class="booking-item-rating">*/
/*                             */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         <div class="col-md-8">*/
/*                         </div>*/
/*                     </div>*/
/*                     */
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="gap gap-small"></div>*/
/* */
/*         </div>*/
/* */
/*         <h3 class="mb20">Commentaires concernant cette offre de maison</h3>*/
/*         <div class="row row-wrap">*/
/*             <div class="col-md-8">*/
/*                 <ul class="booking-item-reviews list">*/
/*                  {% for commentaire in comm %}*/
/*                         <li>*/
/*                             <div class="row">*/
/* */
/*                                 <div class="col-md-10">*/
/*                                     <div class="booking-item-review-content">*/
/*                                         */
/*                                         <p>commentaire:{{commentaire.commentaire }}</p>*/
/*                                        */
/*                                         <p> note={{commentaire.note }}</p>*/
/*                                         <p><span class="booking-item-review-more"> </span>*/
/*                                         </p>*/
/*                                         */
/*                                         <div class="booking-item-review-expand"><span class="booking-item-review-expand-more">Plus <i class="fa fa-angle-down"></i></span><span class="booking-item-review-expand-less">Less <i class="fa fa-angle-up"></i></span>*/
/*                                         </div>*/
/*                                         <ul class="list list-inline text-small">*/
/* */
/*                                             <li><a href={{path('esprit_updateCommentaire',{'id':commentaire.id})}}><i class="fa fa-pencil"></i>Modifier </a>*/
/*                                             </li>*/
/* */
/*                                             {% block wezza %}*/
/* */
/*                                             {% endblock %}*/
/* */
/*                                             <li><a href={{path('esprit_deleteCommentaire',{'id':commentaire.id,'idOffre':commentaire.idoffre})}}><i class="fa fa-cut"></i>Supprimer </a>*/
/*                                             </li>*/
/*                                         </ul> */
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </li>*/
/*                     {% endfor %}   */
/* */
/*                 </ul>*/
/* */
/*                 <div class="row wrap">*/
/* */
/*                     <div class="col-md-7">*/
/*                         <ul class="pagination">*/
/*                             <li class="active"><a href={{asset("#")}}>1</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>2</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>3</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>4</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>5</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>6</a>*/
/*                             </li>*/
/*                             <li><a href={{asset("#")}}>7</a>*/
/*                             </li>*/
/*                             <li class="dots">...</li>*/
/*                             <li><a href={{asset("#")}}>43</a>*/
/*                             </li>*/
/*                             <li class="next"><a href={{asset("#")}}>Next Page</a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="gap gap-small">*/
/*                     <div class="box bg-gray">*/
/*                         <ul class="nav nav-tabs" id="myTab">*/
/*                             <li class="active"><a data-toggle="tab"><i class="fa fa-pencil-square">Ecrire votre commentaire</i></a>*/
/*                             </li>*/
/* */
/*                         </ul>*/
/* */
/* */
/*                         <h3> Commentaire </h3>*/
/*                         <form method="POST"  action="{{path('esprit_ajoutCommentaire')}}">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-8">*/
/* */
/*                                     <div class="form-group">*/
/*                                         <textarea name="commentaire" class="form-control" rows="8"  placeholder="Tapez votre commentaire..."></textarea>*/
/*                                     </div>*/
/* */
/*                                     <input class="btn btn-primary" type="submit" value="Publier"  />*/
/*                                     <input class="btn btn-primary" type="reset" value="Annuler" />*/
/*                                         */
/*                                    */
/*                                 </div>*/
/*                             </div>*/
/*                             */
/*                         </form>*/
/*                             </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*                             */
/*         </div>*/
/*     </div>*/
/*     <div class="gap gap-small"></div>*/
/* */
/* {% endblock %}*/
