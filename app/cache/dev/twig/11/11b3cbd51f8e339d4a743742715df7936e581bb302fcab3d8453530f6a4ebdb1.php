<?php

/* EspritDarkomBundle:Default:rechercheOffre.html.twig */
class __TwigTemplate_27e94b2f9f38763132c56bd63204c99cec11b15092a9e0d54861dd1493886be8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Client.html.twig", "EspritDarkomBundle:Default:rechercheOffre.html.twig", 2);
        $this->blocks = array(
            'formulaire1' => array($this, 'block_formulaire1'),
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
    public function block_formulaire1($context, array $blocks = array())
    {
        // line 4
        echo "    <html>
        <head>
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" 
             <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyles.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>      
        </head>
        <body>
            <form method=\"POST\">
                
                
                <table>
                
                    <tr>      
                        <td><h4>Localité:</h4></td>
                        <td><input type=\"text\" name=\"localite\" /></td>
                    </tr>
                
                    <tr>
                        <td><br/> <br/><h4>Date debut:</h4></td>
                        <td>
                            <br/> <br/><input type=\"date\" name=\"datedebut\"/></td>
                    </tr>
                    
                    <tr>
                        <td><br/> <br/><h4>Date fin:</h4> </td>
                        <td> <br/> <br/><input type=\"date\" name=\"datefin\"/></td>
                    </tr>
                    
                    <tr>
                        <td><br/> <br/><h4> Prix:</h4></td>
                        <td> <br/> <br/><input type=\"number\" name=\"prix\"/></td>
                    </tr>
                </tr>
                </table>
                  
    <input type=\"submit\" class=\"btn btn-primary mt10\" value=\"Rechercher\"/>
            </form>
             <br/> <br/>
        
            <table border=\"6\" style=\"margin-right: 20px ; width: 100px  ; height: 30px\">
    <tr>
        
              
              <td>Titre</td>
              
              <td>Prix</td>
              
              <td>Localite</td>
             
              <td>Consultation</td>
              
              
    </tr>
    
    ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Offre"]) ? $context["Offre"] : $this->getContext($context, "Offre")));
        foreach ($context['_seq'] as $context["_key"] => $context["offres"]) {
            // line 63
            echo "        <tr>
            
        
              <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "titre", array()), "html", null, true);
            echo "</td>
             
              <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "prix", array()), "html", null, true);
            echo "</td> 
              
              <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["offres"], "localite", array()), "html", null, true);
            echo "</td> 
              <td><a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_détalis", array("id" => $this->getAttribute($context["offres"], "id", array()))), "html", null, true);
            echo "\">Consulter</a></td>
              
        
            
              
             </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offres'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "</table>
       

             <form method=\"POST\" style=\"background-color: #d9d9d9\">
                 
              

    
       
        
             </form>
<script src=";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
          </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:rechercheOffre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 108,  233 => 107,  229 => 106,  225 => 105,  221 => 104,  217 => 103,  213 => 102,  209 => 101,  205 => 100,  201 => 99,  197 => 98,  193 => 97,  189 => 96,  185 => 95,  181 => 94,  177 => 93,  173 => 92,  169 => 91,  165 => 90,  161 => 89,  148 => 78,  135 => 71,  131 => 70,  126 => 68,  121 => 66,  116 => 63,  112 => 62,  59 => 12,  55 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   {% extends "EspritDarkomBundle:Default:Client.html.twig"%}*/
/* {%block  formulaire1 %}*/
/*     <html>*/
/*         <head>*/
/*              <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" */
/*              <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">*/
/*             <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">*/
/*             <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">*/
/*             <link rel="stylesheet" href="{{asset("css/styles.css")}}">*/
/*             <link rel="stylesheet" href="{{asset("css/mystyles.css")}}">*/
/*             <script src="{{asset("js/modernizr.js")}}"></script>      */
/*         </head>*/
/*         <body>*/
/*             <form method="POST">*/
/*                 */
/*                 */
/*                 <table>*/
/*                 */
/*                     <tr>      */
/*                         <td><h4>Localité:</h4></td>*/
/*                         <td><input type="text" name="localite" /></td>*/
/*                     </tr>*/
/*                 */
/*                     <tr>*/
/*                         <td><br/> <br/><h4>Date debut:</h4></td>*/
/*                         <td>*/
/*                             <br/> <br/><input type="date" name="datedebut"/></td>*/
/*                     </tr>*/
/*                     */
/*                     <tr>*/
/*                         <td><br/> <br/><h4>Date fin:</h4> </td>*/
/*                         <td> <br/> <br/><input type="date" name="datefin"/></td>*/
/*                     </tr>*/
/*                     */
/*                     <tr>*/
/*                         <td><br/> <br/><h4> Prix:</h4></td>*/
/*                         <td> <br/> <br/><input type="number" name="prix"/></td>*/
/*                     </tr>*/
/*                 </tr>*/
/*                 </table>*/
/*                   */
/*     <input type="submit" class="btn btn-primary mt10" value="Rechercher"/>*/
/*             </form>*/
/*              <br/> <br/>*/
/*         */
/*             <table border="6" style="margin-right: 20px ; width: 100px  ; height: 30px">*/
/*     <tr>*/
/*         */
/*               */
/*               <td>Titre</td>*/
/*               */
/*               <td>Prix</td>*/
/*               */
/*               <td>Localite</td>*/
/*              */
/*               <td>Consultation</td>*/
/*               */
/*               */
/*     </tr>*/
/*     */
/*     {% for offres in Offre %}*/
/*         <tr>*/
/*             */
/*         */
/*               <td>{{offres.titre }}</td>*/
/*              */
/*               <td>{{offres.prix}}</td> */
/*               */
/*               <td>{{offres.localite}}</td> */
/*               <td><a href="{{path('esprit_darkom_détalis',{'id':offres.id})}}">Consulter</a></td>*/
/*               */
/*         */
/*             */
/*               */
/*              </tr>*/
/*         {% endfor %}*/
/* </table>*/
/*        */
/* */
/*              <form method="POST" style="background-color: #d9d9d9">*/
/*                  */
/*               */
/* */
/*     */
/*        */
/*         */
/*              </form>*/
/* <script src={{asset("js/jquery.js")}}></script>*/
/*         <script src={{asset("js/bootstrap.js")}}></script>*/
/*         <script src={{asset("js/slimmenu.js")}}></script>*/
/*         <script src={{asset("js/bootstrap-datepicker.js")}}></script>*/
/*         <script src={{asset("js/bootstrap-timepicker.js")}}></script>*/
/*         <script src={{asset("js/nicescroll.js")}}></script>*/
/*         <script src={{asset("js/dropit.js")}}></script>*/
/*         <script src={{asset("js/ionrangeslider.js")}}></script>*/
/*         <script src={{asset("js/icheck.js")}}></script>*/
/*         <script src={{asset("js/fotorama.js")}}></script>*/
/*         <script src={{asset("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false")}}></script>*/
/*         <script src={{asset("js/typeahead.js")}}></script>*/
/*         <script src={{asset("js/card-payment.js")}}></script>*/
/*         <script src={{asset("js/magnific.js")}}></script>*/
/*         <script src={{asset("js/owl-carousel.js")}}></script>*/
/*          <script src={{asset("js/fitvids.js")}}></script>*/
/*          <script src={{asset("js/tweet.js")}}></script>*/
/*          <script src={{asset("js/countdown.js")}}></script>*/
/*          <script src={{asset("js/gridrotator.js")}}></script>*/
/*          <script src={{asset("js/custom.js")}}></script>*/
/*           </body>*/
/*     </html>*/
/* {%endblock %}         */
