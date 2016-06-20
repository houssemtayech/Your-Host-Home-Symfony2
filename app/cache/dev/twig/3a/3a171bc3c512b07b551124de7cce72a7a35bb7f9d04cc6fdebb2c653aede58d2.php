<?php

/* EspritFrontBundle:OffreDetails:wezza.html.twig */
class __TwigTemplate_3041882aa7476467cb89dae08782658642a0a514b418b2ecc0f1cb9423fc27ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("EspritFrontBundle::OffreDetails.html.twig", "EspritFrontBundle:OffreDetails:wezza.html.twig", 1);
        $this->blocks = array(
            'wezza' => array($this, 'block_wezza'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EspritFrontBundle::OffreDetails.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_wezza($context, array $blocks = array())
    {
        // line 4
        echo "    
    <h3> Commentaire </h3>
                        <form method=\"POST\"  action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("esprit_updateCommentaire");
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
    
";
    }

    public function getTemplateName()
    {
        return "EspritFrontBundle:OffreDetails:wezza.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends "EspritFrontBundle::OffreDetails.html.twig" %}*/
/* */
/* {% block wezza %}*/
/*     */
/*     <h3> Commentaire </h3>*/
/*                         <form method="POST"  action="{{path('esprit_updateCommentaire')}}">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-8">*/
/* */
/*                                     <div class="form-group">*/
/*                                         <textarea name="commentaire" class="form-control" rows="8"  placeholder="Tapez votre commentaire..."></textarea>*/
/*                                     </div>*/
/*                                     */
/*                                     <input class="btn btn-primary" type="submit" value="Publier"  />*/
/*                                     <input class="btn btn-primary" type="reset" value="Annuler" />*/
/*                                 </div>*/
/*                                 </div>*/
/*                         </form>*/
/*     */
/* {% endblock %}*/
