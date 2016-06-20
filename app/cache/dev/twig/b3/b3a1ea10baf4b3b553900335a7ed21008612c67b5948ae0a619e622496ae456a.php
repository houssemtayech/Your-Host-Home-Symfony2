<?php

/* EspritDarkomBundle:Note:list.html.twig */
class __TwigTemplate_215700b648aa10eec945ba75819dcdb241dc23ab6a75a6978d60877ccf74f3f8 extends Twig_Template
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
        echo "<h1> Liste des commentaires </h1>
<table border=1>
    <tr>
        <th> ID </th>
        <th> Commentaire </th>
        <th> Approuver </th>
        <th> Désapprouver </th>

    </tr>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Note"]) ? $context["Note"] : $this->getContext($context, "Note")));
        foreach ($context['_seq'] as $context["_key"] => $context["notes"]) {
            // line 11
            echo "
        <tr>
            <td> ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "id", array()), "html", null, true);
            echo " </td>
            <td> ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["notes"], "commentaire", array()), "html", null, true);
            echo " </td>
            <td> <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_accepter_commentaire", array("id" => $this->getAttribute($context["notes"], "id", array()))), "html", null, true);
            echo "\"> Approuver </a></td>
            <td> <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_refuser_commentaire", array("id" => $this->getAttribute($context["notes"], "id", array()))), "html", null, true);
            echo "\"> Désapprouver </a></td>
        </tr>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

</table>
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Note:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  50 => 16,  46 => 15,  42 => 14,  38 => 13,  34 => 11,  30 => 10,  19 => 1,);
    }
}
/* <h1> Liste des commentaires </h1>*/
/* <table border=1>*/
/*     <tr>*/
/*         <th> ID </th>*/
/*         <th> Commentaire </th>*/
/*         <th> Approuver </th>*/
/*         <th> Désapprouver </th>*/
/* */
/*     </tr>*/
/*     {% for notes in Note %}*/
/* */
/*         <tr>*/
/*             <td> {{notes.id}} </td>*/
/*             <td> {{notes.commentaire}} </td>*/
/*             <td> <a href="{{path('esprit_darkom_accepter_commentaire',{'id':notes.id})}}"> Approuver </a></td>*/
/*             <td> <a href="{{path('esprit_darkom_refuser_commentaire',{'id':notes.id})}}"> Désapprouver </a></td>*/
/*         </tr>*/
/* */
/*     {% endfor %}*/
/* */
/* */
/* </table>*/
/* */
