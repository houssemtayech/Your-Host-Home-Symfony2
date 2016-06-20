<?php

/* EspritDarkomBundle:Default:ajoutReclamation.html.twig */
class __TwigTemplate_a27477f52fc0cb696fe84c345f668e317405773084cb7977da4294574e6a303a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("EspritDarkomBundle:Default:Client.html.twig", "EspritDarkomBundle:Default:ajoutReclamation.html.twig", 2);
        $this->blocks = array(
            'formulaire2' => array($this, 'block_formulaire2'),
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

    // line 4
    public function block_formulaire2($context, array $blocks = array())
    {
        // line 5
        echo "<form method=\"POST\">
<table>
    
    
    <tr> 
        <td><input type=\"text\" id=\"text3\" name=\"nom\"  placeholder=\"le nom de la personne\" required=\"required\" /></td>      
    </tr>
    
     <tr> 
        <td><input type=\"text\" id=\"text3\" name=\"prenom\"  placeholder=\"le prenom de la personne\" required=\"required\" /></td>      
    </tr>  
    
      
    <tr> 
        <td><input type=\"text\" id=\"text3\" name=\"sujet\"  placeholder=\"le sujet de la réclamation\" required=\"required\"  /></td>      
    </tr>
    <tr>
        <td><textarea maxlength=\"6000\" id=\"text3\" name=\"texte\" placeholder=\"Saisisser une discription de la situation et le nom de celui dont vous voulez réclamer si ça intéresse une personne en particulier \" required=\"required\"></textarea></td>
    </tr>
    
    
    
    <tr>
        <td><input type=\"submit\" value=\"Réclamer\" /></td>
    </tr>
</table>
   
     
    

   </form>  
";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:ajoutReclamation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 5,  28 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/*   {% extends "EspritDarkomBundle:Default:Client.html.twig"%}*/
/*   */
/* {%block  formulaire2 %}*/
/* <form method="POST">*/
/* <table>*/
/*     */
/*     */
/*     <tr> */
/*         <td><input type="text" id="text3" name="nom"  placeholder="le nom de la personne" required="required" /></td>      */
/*     </tr>*/
/*     */
/*      <tr> */
/*         <td><input type="text" id="text3" name="prenom"  placeholder="le prenom de la personne" required="required" /></td>      */
/*     </tr>  */
/*     */
/*       */
/*     <tr> */
/*         <td><input type="text" id="text3" name="sujet"  placeholder="le sujet de la réclamation" required="required"  /></td>      */
/*     </tr>*/
/*     <tr>*/
/*         <td><textarea maxlength="6000" id="text3" name="texte" placeholder="Saisisser une discription de la situation et le nom de celui dont vous voulez réclamer si ça intéresse une personne en particulier " required="required"></textarea></td>*/
/*     </tr>*/
/*     */
/*     */
/*     */
/*     <tr>*/
/*         <td><input type="submit" value="Réclamer" /></td>*/
/*     </tr>*/
/* </table>*/
/*    */
/*      */
/*     */
/* */
/*    </form>  */
/* {%endblock %}  */
