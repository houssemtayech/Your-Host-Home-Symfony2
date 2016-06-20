<?php

/* EspritDarkomBundle:Default:Ajouter_evt_org.html.twig */
class __TwigTemplate_23c895543dcc5a1faeec045f5d3c0e73fbfd089103846724db024a240ec11b5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Annonceur.html.twig", "EspritDarkomBundle:Default:Ajouter_evt_org.html.twig", 1);
        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
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

    // line 2
    public function block_formulaire($context, array $blocks = array())
    {
        // line 3
        echo "    <html>
        <head>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" 
        </head>
        <body >
            <form method=\"POST\" style=\"background-color: #d9d9d9\">

    <h1>Ajout d'annonce</h1>

   
        <table >
            <tr>
                <td>
                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'label', array("label" => "titre: "));
        echo "

                </td>
                <td>
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'label', array("label" => "description: "));
        echo " 
                </td>
                <td>
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "gouvernorat", array()), 'label', array("label" => "gouvernorat: "));
        echo "
                </td>
                <td>
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "gouvernorat", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "delegation", array()), 'label', array("label" => "delegation: "));
        echo "
                </td>
                <td>
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "delegation", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'label', array("label" => "type: "));
        echo "
                </td>
                <td>
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'label', array("label" => "prix: "));
        echo "
                </td>
                <td>
                    ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "localite", array()), 'label', array("label" => "localite: "));
        echo "
                </td>
                <td>
                    ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "localite", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbrepiece", array()), 'label', array("label" => "nbrepiece:  S+"));
        echo "
                </td>
                <td>
                    ";
        // line 76
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbrepiece", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datedebut", array()), 'label', array("label" => "datedebut: "));
        echo "
                </td>
                <td>
                    ";
        // line 84
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datedebut", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datefin", array()), 'label', array("label" => "datefin: "));
        echo "
                </td>
                <td>
                    ";
        // line 92
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datefin", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "codepostal", array()), 'label', array("label" => "codepostal: "));
        echo "
                </td>
                <td>
                    ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "codepostal", array()), 'widget');
        echo "
                </td>
            </tr>
            <tr>
                <td>
                    ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "superficie", array()), 'label', array("label" => "superficie: "));
        echo "
                </td>
                <td>

                    ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "superficie", array()), 'widget');
        echo "
                </td>
            </tr>
            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "
        </table>
        <table>
            <tr>
                <td>
                    <input type=\"submit\" value=\"Enregistrer\" class=\"btn \" style=\"background-color: #00e2ec ;color: #000 \"/>
                </td>
                <td>
                    <button type=\"submit\" value=\"Retour\" class=\"btn \" style=\"background-color: #00e2ec ;color: #000 \"><a href=\"http://localhost/darkom/web/app_dev.php/Annonceur\">retour</a></button>
                </td>
            </tr>
        
             <div>  ";
        // line 124
        echo $this->env->getExtension('nomaya_social_bar')->getSocialButtons();
        echo "</div> 
        </table>
    </form>
        </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:Ajouter_evt_org.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 124,  217 => 112,  211 => 109,  204 => 105,  196 => 100,  190 => 97,  182 => 92,  176 => 89,  168 => 84,  162 => 81,  154 => 76,  148 => 73,  140 => 68,  134 => 65,  126 => 60,  120 => 57,  112 => 52,  106 => 49,  98 => 44,  92 => 41,  84 => 36,  78 => 33,  70 => 28,  64 => 25,  56 => 20,  49 => 16,  35 => 5,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/* {% extends "EspritDarkomBundle:Default:Annonceur.html.twig"%}*/
/* {%block  formulaire %}*/
/*     <html>*/
/*         <head>*/
/*             <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" */
/*         </head>*/
/*         <body >*/
/*             <form method="POST" style="background-color: #d9d9d9">*/
/* */
/*     <h1>Ajout d'annonce</h1>*/
/* */
/*    */
/*         <table >*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.titre,'titre: ')}}*/
/* */
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.titre) }}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.description,'description: ')}} */
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.description)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.gouvernorat,'gouvernorat: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.gouvernorat)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.delegation,'delegation: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.delegation)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.type,'type: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.type)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.prix,'prix: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.prix)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.localite,'localite: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.localite)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.nbrepiece,'nbrepiece:  S+')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.nbrepiece)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.datedebut,'datedebut: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.datedebut)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.datefin,'datefin: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.datefin)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.codepostal,'codepostal: ')}}*/
/*                 </td>*/
/*                 <td>*/
/*                     {{form_widget(Form.codepostal)}}*/
/*                 </td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <td>*/
/*                     {{form_label(Form.superficie,'superficie: ')}}*/
/*                 </td>*/
/*                 <td>*/
/* */
/*                     {{form_widget(Form.superficie)}}*/
/*                 </td>*/
/*             </tr>*/
/*             {{ form_rest(Form) }}*/
/*         </table>*/
/*         <table>*/
/*             <tr>*/
/*                 <td>*/
/*                     <input type="submit" value="Enregistrer" class="btn " style="background-color: #00e2ec ;color: #000 "/>*/
/*                 </td>*/
/*                 <td>*/
/*                     <button type="submit" value="Retour" class="btn " style="background-color: #00e2ec ;color: #000 "><a href="http://localhost/darkom/web/app_dev.php/Annonceur">retour</a></button>*/
/*                 </td>*/
/*             </tr>*/
/*         */
/*              <div>  {{socialButtons()}}</div> */
/*         </table>*/
/*     </form>*/
/*         </body>*/
/*     </html>*/
/* {%endblock %}*/
