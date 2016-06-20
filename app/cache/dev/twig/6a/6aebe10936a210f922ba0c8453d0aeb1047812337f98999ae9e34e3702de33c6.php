<?php

/* EspritGraphBundle:Graphe:LineChart.html.twig */
class __TwigTemplate_adcc715720a97862ded1ec5b206d963e5ab9a35302cc17ee68dd60191e1b67f9 extends Twig_Template
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
        echo "<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" 

type=\"text/javascript\"></script>

<script src=\"//code.highcharts.com/4.0.1/highcharts.js\"></script>

<script src=\"//code.highcharts.com/4.0.1/modules/exporting.js\"></script>

<script type=\"text/javascript\">

    ";
        // line 11
        echo $this->env->getExtension('highcharts_extension')->chart((isset($context["chart"]) ? $context["chart"] : $this->getContext($context, "chart")));
        echo "

</script>

<div id=\"linechart\" style=\"min-width: 400px; height: 400px; margin: 0 auto\"></div>";
    }

    public function getTemplateName()
    {
        return "EspritGraphBundle:Graphe:LineChart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }
}
/* <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" */
/* */
/* type="text/javascript"></script>*/
/* */
/* <script src="//code.highcharts.com/4.0.1/highcharts.js"></script>*/
/* */
/* <script src="//code.highcharts.com/4.0.1/modules/exporting.js"></script>*/
/* */
/* <script type="text/javascript">*/
/* */
/*     {{ chart(chart) }}*/
/* */
/* </script>*/
/* */
/* <div id="linechart" style="min-width: 400px; height: 400px; margin: 0 auto"></div>*/
