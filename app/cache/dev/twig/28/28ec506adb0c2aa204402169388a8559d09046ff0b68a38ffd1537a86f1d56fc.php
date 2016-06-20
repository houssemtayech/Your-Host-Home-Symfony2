<?php

/* EspritDarkomBundle:Default:Update_evt.html.twig */
class __TwigTemplate_daa68fd2ed7bd9033344200516744f6710c5318efebc686ee8e38f840b8abcc6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Annonceur.html.twig", "EspritDarkomBundle:Default:Update_evt.html.twig", 2);
        $this->blocks = array(
            'formulaire2' => array($this, 'block_formulaire2'),
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
    public function block_formulaire2($context, array $blocks = array())
    {
        // line 4
        echo "    
    <html>
        <head>
             <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" 
        </head>
        <body>

 <form method=\"POST\" style=\"background-color: #d9d9d9\">
<h1>Mise à jour de l'annonce </h1> 
<table>

<tr>

<td>
    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'label', array("label" => "titre: "));
        echo "

</td>

<td>

 ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "titre", array()), 'widget');
        echo "

</td>

</tr>

<tr>

<td>

 ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'label', array("label" => "description: "));
        echo " 

</td>

<td>

 ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "description", array()), 'widget');
        echo "

</td>

</tr>

<tr>

<td>

 ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "gouvernorat", array()), 'label', array("label" => "gouvernorat: "));
        echo "

</td>

<td>

 ";
        // line 56
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "gouvernorat", array()), 'widget');
        echo "

</td>

</tr>

<tr>

<td>

 ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "delegation", array()), 'label', array("label" => "delegation: "));
        echo "

</td>

<td>

 ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "delegation", array()), 'widget');
        echo "

</td>

</tr>

<tr>

<td>
    ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'label', array("label" => "type: "));
        echo "

</td>

<td>

 ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "type", array()), 'widget');
        echo "

</td>

</tr>
<tr>

<td>

 ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'label', array("label" => "prix: "));
        echo "

</td>

<td>

 ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prix", array()), 'widget');
        echo "

</td>

</tr>
</tr>
<tr>

<td>

 ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "localite", array()), 'label', array("label" => "localite: "));
        echo "

</td>

<td>

 ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "localite", array()), 'widget');
        echo "

</td>

</tr>


<tr>

<td>

 ";
        // line 129
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbrepiece", array()), 'label', array("label" => "nbrepiece:  S+"));
        echo "

</td>

<td>

 ";
        // line 135
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nbrepiece", array()), 'widget');
        echo "

</td>

</tr>


<tr>

<td>

 ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "codepostal", array()), 'label', array("label" => "codepostal: "));
        echo "

</td>

<td>

 ";
        // line 152
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "codepostal", array()), 'widget');
        echo "

</td>

</tr>
<tr>

<td>

 ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "superficie", array()), 'label', array("label" => "superficie: "));
        echo "

</td>

<td>

 ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "superficie", array()), 'widget');
        echo "

</td>

</tr>

<tr>

<td>
    ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datedebut", array()), 'label', array("label" => "datedebut: "));
        echo "

</td>

<td>

 ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datedebut", array()), 'widget');
        echo "

</td>

</tr>
  <tr>

            <td>
                ";
        // line 190
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datefin", array()), 'label', array("label" => "datefin: "));
        echo "

            </td>

            <td>

                ";
        // line 196
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "datefin", array()), 'widget');
        echo "

            </td>

        </tr>
 ";
        // line 201
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo "

</table>

<table>

<tr>
    <td>

<input type=\"submit\" value=\"Enregistrer\"/>
 <button type=\"submit\" value=\"Retour\" class=\"btn \" style=\"background-color: #00e2ec ;color: #ffffff \"><a href=\"http://localhost/darkom/web/app_dev.php/Annonceur\">retour</a></button>
</td>

</tr>

</table>
 
</form>
        </body>
    </html>
   </body>
    </html>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:Update_evt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 201,  297 => 196,  288 => 190,  277 => 182,  268 => 176,  256 => 167,  247 => 161,  235 => 152,  226 => 146,  212 => 135,  203 => 129,  189 => 118,  180 => 112,  167 => 102,  158 => 96,  146 => 87,  137 => 81,  125 => 72,  116 => 66,  103 => 56,  94 => 50,  81 => 40,  72 => 34,  59 => 24,  50 => 18,  36 => 7,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends "EspritDarkomBundle:Default:Annonceur.html.twig"%}*/
/* {%block  formulaire2 %}*/
/*     */
/*     <html>*/
/*         <head>*/
/*              <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" */
/*         </head>*/
/*         <body>*/
/* */
/*  <form method="POST" style="background-color: #d9d9d9">*/
/* <h1>Mise à jour de l'annonce </h1> */
/* <table>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/*     {{form_label(Form.titre,'titre: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.titre)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.description,'description: ')}} */
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.description)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.gouvernorat,'gouvernorat: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.gouvernorat)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.delegation,'delegation: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.delegation)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/*     {{form_label(Form.type,'type: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.type)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.prix,'prix: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.prix)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* </tr>*/
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.localite,'localite: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.localite)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* */
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.nbrepiece,'nbrepiece:  S+')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.nbrepiece)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* */
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.codepostal,'codepostal: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.codepostal)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* <tr>*/
/* */
/* <td>*/
/* */
/*  {{form_label(Form.superficie,'superficie: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.superficie)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/* */
/* <tr>*/
/* */
/* <td>*/
/*     {{form_label(Form.datedebut,'datedebut: ')}}*/
/* */
/* </td>*/
/* */
/* <td>*/
/* */
/*  {{form_widget(Form.datedebut)}}*/
/* */
/* </td>*/
/* */
/* </tr>*/
/*   <tr>*/
/* */
/*             <td>*/
/*                 {{form_label(Form.datefin,'datefin: ')}}*/
/* */
/*             </td>*/
/* */
/*             <td>*/
/* */
/*                 {{form_widget(Form.datefin)}}*/
/* */
/*             </td>*/
/* */
/*         </tr>*/
/*  {{ form_rest(Form) }}*/
/* */
/* </table>*/
/* */
/* <table>*/
/* */
/* <tr>*/
/*     <td>*/
/* */
/* <input type="submit" value="Enregistrer"/>*/
/*  <button type="submit" value="Retour" class="btn " style="background-color: #00e2ec ;color: #ffffff "><a href="http://localhost/darkom/web/app_dev.php/Annonceur">retour</a></button>*/
/* </td>*/
/* */
/* </tr>*/
/* */
/* </table>*/
/*  */
/* </form>*/
/*         </body>*/
/*     </html>*/
/*    </body>*/
/*     </html>*/
/* {%endblock %}*/
