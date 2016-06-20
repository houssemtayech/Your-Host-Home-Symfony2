<?php

/* EspritDarkomBundle:Default:listReclamation.html.twig */
class __TwigTemplate_f3f2d462e30e599591520d3bb1891f840861cd98eb465a5c47c574df89177feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Admin.html.twig", "EspritDarkomBundle:Default:listReclamation.html.twig", 2);
        $this->blocks = array(
            'formulaire3' => array($this, 'block_formulaire3'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritDarkomBundle:Default:Admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_formulaire3($context, array $blocks = array())
    {
        // line 4
        echo "<table border=\"4\" >
      <thead>\t\t\t\t

    <tr> 
        <th>Nom</th><th>Prenom</th><th>Sujet</th><th>Description </th><th>à la date</th><th>Supprimer</th>
        
    </tr>
    </thead>
    <tbody>
    
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) ? $context["reclamations"] : $this->getContext($context, "reclamations")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 15
            echo "       <tr class=\"";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "", 1 => "alt"), $this->getAttribute($context["loop"], "index", array())), "html", null, true);
            echo "\" onclick=\"selectionner(this)\" data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "id", array()), "html", null, true);
            echo "\"  data-nom=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "nom", array()), "html", null, true);
            echo "\" data-prenom=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "prenom", array()), "html", null, true);
            echo "\" data-sujet=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "sujet", array()), "html", null, true);
            echo "\" data-text=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "texte", array()), "html", null, true);
            echo "\"  data-dateReclamation=\"";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "d/m/y"), "html", null, true);
            echo "\">
            <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "nom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "prenom", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "sujet", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["rec"], "texte", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["rec"], "dateReclamation", array()), "d/m/y"), "html", null, true);
            echo "</td>
            
            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("delete_reclamation", array("id" => $this->getAttribute($context["rec"], "id", array()))), "html", null, true);
            echo "\">Supprimer </a></td>
      </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rec'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "</tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:listReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  98 => 22,  93 => 20,  89 => 19,  85 => 18,  81 => 17,  77 => 16,  60 => 15,  43 => 14,  31 => 4,  28 => 3,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   {% extends "EspritDarkomBundle:Default:Admin.html.twig"%}*/
/* {%block  formulaire3 %}*/
/* <table border="4" >*/
/*       <thead>				*/
/* */
/*     <tr> */
/*         <th>Nom</th><th>Prenom</th><th>Sujet</th><th>Description </th><th>à la date</th><th>Supprimer</th>*/
/*         */
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*     */
/*     {% for rec in reclamations %}*/
/*        <tr class="{{ cycle(["", "alt"], loop.index) }}" onclick="selectionner(this)" data-id="{{ rec.id }}"  data-nom="{{ rec.nom }}" data-prenom="{{ rec.prenom }}" data-sujet="{{ rec.sujet }}" data-text="{{ rec.texte }}"  data-dateReclamation="{{ rec.dateReclamation|date('d/m/y')}}">*/
/*             <td>{{ rec.nom }}</td>*/
/*             <td>{{ rec.prenom }}</td>*/
/*             <td>{{ rec.sujet }}</td>*/
/*             <td>{{ rec.texte }}</td>*/
/*             <td>{{ rec.dateReclamation|date('d/m/y')}}</td>*/
/*             */
/*             <td><a href="{{path('delete_reclamation',{'id':rec.id})}}">Supprimer </a></td>*/
/*       </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* </table>*/
/* {%endblock %}  */
