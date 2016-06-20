<?php

/* EspritFrontBundle::layout.html.twig */
class __TwigTemplate_a921058be97a6da1d13da56a7e810c17675209784416683a365b6cdf6a65f247 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'header' => array($this, 'block_header'),
            'container' => array($this, 'block_container'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

    <head>
        ";
        // line 5
        $this->displayBlock('head', $context, $blocks);
        // line 30
        echo "
    </head>

    <body>

       
        <div class=\"global-wrap\">
            <header id=\"main-header\">
                ";
        // line 38
        $this->displayBlock('header', $context, $blocks);
        // line 69
        echo "            </header>
        </div>

        ";
        // line 72
        $this->displayBlock('container', $context, $blocks);
        // line 75
        echo "
        ";
        // line 76
        $this->displayBlock('footer', $context, $blocks);
        // line 109
        echo "    </body>

</html>


";
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "            <title>Darkom</title>


            <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
            <meta name=\"keywords\" content=\"Template, html, premium, themeforest\" />
            <meta name=\"description\" content=\"Darkom - YourHost Home\">
            <meta name=\"author\" content=\"Tsoy\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

            <!-- GOOGLE FONTS -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/starrating/css/rating.css"), "html", null, true);
        echo "\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
            <!-- /GOOGLE FONTS -->
            <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyles.css"), "html", null, true);
        echo "\">
            <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>
           
           

        ";
    }

    // line 38
    public function block_header($context, array $blocks = array())
    {
        // line 39
        echo "                    <div class=\"header-top\">
                        <div class=\"container\">
                            <div class=\"row\">
                                <div class=\"col-md-3\">
                                    <a class=\"logo\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                                    </a>
                                </div>
                                <div class=\"col-md-3 col-md-offset-2\">
                                    
                                </div>
                                <div class=\"col-md-4\">
                                   <div class=\"top-user-area clearfix\">
                                
                                <ul class=\"top-user-area-list list list-horizontal list-border\">
                                    <li><a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierClient", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\"><span style=\"color: white\">hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "prenom", array()), "html", null, true);
        echo " !</span></a>
                                    </li>
                                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/logout"), "html", null, true);
        echo "\">Déconnexion</a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                ";
    }

    // line 72
    public function block_container($context, array $blocks = array())
    {
        // line 73
        echo "
        ";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        echo "     

            
          

            
            



           

            <script src=";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
            <script src=";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
            <script src=";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
        ";
    }

    public function getTemplateName()
    {
        return "EspritFrontBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  271 => 107,  267 => 106,  263 => 105,  259 => 104,  255 => 103,  251 => 102,  247 => 101,  243 => 100,  239 => 99,  235 => 98,  231 => 97,  227 => 96,  223 => 95,  219 => 94,  215 => 93,  211 => 92,  207 => 91,  203 => 90,  199 => 89,  195 => 88,  179 => 76,  174 => 73,  171 => 72,  154 => 56,  147 => 54,  134 => 44,  130 => 43,  124 => 39,  121 => 38,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  87 => 18,  83 => 17,  79 => 16,  67 => 6,  64 => 5,  55 => 109,  53 => 76,  50 => 75,  48 => 72,  43 => 69,  41 => 38,  31 => 30,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* */
/*     <head>*/
/*         {% block head %}*/
/*             <title>Darkom</title>*/
/* */
/* */
/*             <meta content="text/html;charset=utf-8" http-equiv="Content-Type">*/
/*             <meta name="keywords" content="Template, html, premium, themeforest" />*/
/*             <meta name="description" content="Darkom - YourHost Home">*/
/*             <meta name="author" content="Tsoy">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*             <!-- GOOGLE FONTS -->*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset('bundles/starrating/css/rating.css') }}" />*/
/*             <link href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700')}}" rel='stylesheet' type='text/css'>*/
/*             <link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600')}}" rel='stylesheet' type='text/css'>*/
/*             <!-- /GOOGLE FONTS -->*/
/*             <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">*/
/*             <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">*/
/*             <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">*/
/*             <link rel="stylesheet" href="{{asset("css/styles.css")}}">*/
/*             <link rel="stylesheet" href="{{asset("css/mystyles.css")}}">*/
/*             <script src="{{asset("js/modernizr.js")}}"></script>*/
/*            */
/*            */
/* */
/*         {% endblock %}*/
/* */
/*     </head>*/
/* */
/*     <body>*/
/* */
/*        */
/*         <div class="global-wrap">*/
/*             <header id="main-header">*/
/*                 {% block header %}*/
/*                     <div class="header-top">*/
/*                         <div class="container">*/
/*                             <div class="row">*/
/*                                 <div class="col-md-3">*/
/*                                     <a class="logo" href="{{asset('index.html')}}">*/
/*                                         <img src="{{asset('img/logo-invert.png')}}" alt="Image Alternative text" title="Image Title" />*/
/*                                     </a>*/
/*                                 </div>*/
/*                                 <div class="col-md-3 col-md-offset-2">*/
/*                                     */
/*                                 </div>*/
/*                                 <div class="col-md-4">*/
/*                                    <div class="top-user-area clearfix">*/
/*                                 */
/*                                 <ul class="top-user-area-list list list-horizontal list-border">*/
/*                                     <li><a href="{{path('modifierClient',{'id':app.User.id})}}"><span style="color: white">hi {{app.User.prenom}} !</span></a>*/
/*                                     </li>*/
/*                                     <li><a href="{{asset('/darkom/web/app_dev.php/logout')}}">Déconnexion</a>*/
/*                                     </li>*/
/*                                    */
/*                                    */
/*                                 </ul>*/
/*                             </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     */
/*                 {% endblock %}*/
/*             </header>*/
/*         </div>*/
/* */
/*         {% block container %}*/
/* */
/*         {% endblock %}*/
/* */
/*         {% block footer %}     */
/* */
/*             */
/*           */
/* */
/*             */
/*             */
/* */
/* */
/* */
/*            */
/* */
/*             <script src={{asset("js/jquery.js")}}></script>*/
/*             <script src={{asset("js/bootstrap.js")}}></script>*/
/*             <script src={{asset("js/slimmenu.js")}}></script>*/
/*             <script src={{asset("js/bootstrap-datepicker.js")}}></script>*/
/*             <script src={{asset("js/bootstrap-timepicker.js")}}></script>*/
/*             <script src={{asset("js/nicescroll.js")}}></script>*/
/*             <script src={{asset("js/dropit.js")}}></script>*/
/*             <script src={{asset("js/ionrangeslider.js")}}></script>*/
/*             <script src={{asset("js/icheck.js")}}></script>*/
/*             <script src={{asset("js/fotorama.js")}}></script>*/
/*             <script src={{asset("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false")}}></script>*/
/*             <script src={{asset("js/typeahead.js")}}></script>*/
/*             <script src={{asset("js/card-payment.js")}}></script>*/
/*             <script src={{asset("js/magnific.js")}}></script>*/
/*             <script src={{asset("js/owl-carousel.js")}}></script>*/
/*             <script src={{asset("js/fitvids.js")}}></script>*/
/*             <script src={{asset("js/tweet.js")}}></script>*/
/*             <script src={{asset("js/countdown.js")}}></script>*/
/*             <script src={{asset("js/gridrotator.js")}}></script>*/
/*             <script src={{asset("js/custom.js")}}></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
