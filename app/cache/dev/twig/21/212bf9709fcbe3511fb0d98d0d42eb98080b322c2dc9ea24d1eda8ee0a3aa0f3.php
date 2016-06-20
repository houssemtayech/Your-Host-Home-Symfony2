<?php

/* EspritDarkomBundle:Default:Annonceur.html.twig */
class __TwigTemplate_c5f262d541a64239a6a1df253106298897f4e07b56794e4daf7939633cc2b57f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire' => array($this, 'block_formulaire'),
            'formulaire1' => array($this, 'block_formulaire1'),
            'formulaire2' => array($this, 'block_formulaire2'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
    <title>Darkom</title>


    <meta content=\"text/html;charset=utf-8\" http-equiv=\"Content-Type\">
    <meta name=\"keywords\" content=\"Template, html, premium, themeforest\" />
    <meta name=\"description\" content=\"Darkom - YourHost Home\">
    <meta name=\"author\" content=\"Tsoy\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- GOOGLE FONTS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/modernizr.js"), "html", null, true);
        echo "\"></script>


</head>

<body>

    <!-- FACEBOOK WIDGET -->
    <div id=\"fb-root\"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0"), "html", null, true);
        echo "\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class=\"global-wrap\">
        <header id=\"main-header\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <a class=\"logo\" href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                            </a>
                        </div>
                        <div class=\"col-md-3 col-md-offset-2\">
                            
                        </div
                        <div class=\"col-md-4\">
                            <div class=\"top-user-area clearfix\">
                                
                                <ul class=\"top-user-area-list list list-horizontal list-border\">
                                    <li><a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierAnnonceur", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\"><span style=\"color: white\">hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "prenom", array()), "html", null, true);
        echo " !</span></a>
                                    </li>
                                    <li><a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/logout"), "html", null, true);
        echo "\">Déconnexion</a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"container\">
            </div>
        <!-- TOP AREA -->
         <div class=\"top-area show-onload\">
            <div class=\"bg-holder full\">
                <div class=\"bg-mask\"></div>
                <div class=\"bg-img\" style=\"background-image:url(img/2048x1365.png);\"></div>
                <video class=\"bg-video hidden-sm hidden-xs\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" poster=\"img/video-bg.jpg\">
                    <source src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop4.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop4.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
                    <div class=\"container rel full-height\">
                        <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                                    
                                <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >ajout Annonce</span></a>
                                    </li>
                                   <li ><a href=\"#tab-2\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >liste des annonces ajoutées</span></a>
                                    </li>
                                    <li ><a href=\"#tab-3\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Modification annonce</span></a>
                                    </li>
                                    
                                   
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                       <h2><a href=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajoutEvennement", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\">ajouter votre annonce</a></h2>
                                               
                                                ";
        // line 103
        $this->displayBlock('formulaire', $context, $blocks);
        // line 105
        echo "                                        
                                        
                                        
                                        
                                        
                                    </div>
                                    <div class=\"tab-pane fade \" id=\"tab-2\">
                                        <h2><a href=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("list", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\">liste des annonces ajoutées</a></h2>
                                                ";
        // line 113
        $this->displayBlock('formulaire1', $context, $blocks);
        // line 115
        echo "                                            
                                            
                                            
                                            
                                    </div>
                                                    <div class=\"tab-pane fade \" id=\"tab-3\">
                                                     <h2><a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("esprit_darkom_modifier1", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\">modifier votre annonce </a></h2>
                                                  ";
        // line 122
        $this->displayBlock('formulaire2', $context, $blocks);
        // line 124
        echo "



                                            </div> 
                                  
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
       
        



        

        <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    // line 103
    public function block_formulaire($context, array $blocks = array())
    {
        // line 104
        echo "                                                    ";
    }

    // line 113
    public function block_formulaire1($context, array $blocks = array())
    {
        // line 114
        echo "                                                    ";
    }

    // line 122
    public function block_formulaire2($context, array $blocks = array())
    {
        // line 123
        echo "                                                    ";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:Annonceur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 123,  335 => 122,  331 => 114,  328 => 113,  324 => 104,  321 => 103,  309 => 167,  305 => 166,  301 => 165,  297 => 164,  293 => 163,  289 => 162,  285 => 161,  281 => 160,  277 => 159,  273 => 158,  269 => 157,  265 => 156,  261 => 155,  257 => 154,  253 => 153,  249 => 152,  245 => 151,  241 => 150,  237 => 149,  233 => 148,  207 => 124,  205 => 122,  201 => 121,  193 => 115,  191 => 113,  187 => 112,  178 => 105,  176 => 103,  171 => 101,  148 => 81,  144 => 80,  123 => 62,  116 => 60,  103 => 50,  99 => 49,  85 => 38,  67 => 23,  63 => 22,  59 => 21,  55 => 20,  51 => 19,  47 => 18,  42 => 16,  38 => 15,  22 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* */
/* <head>*/
/*     <title>Darkom</title>*/
/* */
/* */
/*     <meta content="text/html;charset=utf-8" http-equiv="Content-Type">*/
/*     <meta name="keywords" content="Template, html, premium, themeforest" />*/
/*     <meta name="description" content="Darkom - YourHost Home">*/
/*     <meta name="author" content="Tsoy">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- GOOGLE FONTS -->*/
/*     <link href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700')}}" rel='stylesheet' type='text/css'>*/
/*     <link href="{{asset('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600')}}" rel='stylesheet' type='text/css'>*/
/*     <!-- /GOOGLE FONTS -->*/
/*     <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">*/
/*     <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">*/
/*     <link rel="stylesheet" href="{{asset("css/icomoon.css")}}">*/
/*     <link rel="stylesheet" href="{{asset("css/styles.css")}}">*/
/*     <link rel="stylesheet" href="{{asset("css/mystyles.css")}}">*/
/*     <script src="{{asset("js/modernizr.js")}}"></script>*/
/* */
/* */
/* </head>*/
/* */
/* <body>*/
/* */
/*     <!-- FACEBOOK WIDGET -->*/
/*     <div id="fb-root"></div>*/
/*     <script>*/
/*         (function(d, s, id) {*/
/*             var js, fjs = d.getElementsByTagName(s)[0];*/
/*             if (d.getElementById(id)) return;*/
/*             js = d.createElement(s);*/
/*             js.id = id;*/
/*             js.src = "{{asset('//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0')}}";*/
/*             fjs.parentNode.insertBefore(js, fjs);*/
/*         }(document, 'script', 'facebook-jssdk'));*/
/*     </script>*/
/*     <!-- /FACEBOOK WIDGET -->*/
/*     <div class="global-wrap">*/
/*         <header id="main-header">*/
/*             <div class="header-top">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <a class="logo" href="{{asset('index.html')}}">*/
/*                                 <img src="{{asset('img/logo-invert.png')}}" alt="Image Alternative text" title="Image Title" />*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="col-md-3 col-md-offset-2">*/
/*                             */
/*                         </div*/
/*                         <div class="col-md-4">*/
/*                             <div class="top-user-area clearfix">*/
/*                                 */
/*                                 <ul class="top-user-area-list list list-horizontal list-border">*/
/*                                     <li><a href="{{path('modifierAnnonceur',{'id':app.User.id})}}"><span style="color: white">hi {{app.User.prenom}} !</span></a>*/
/*                                     </li>*/
/*                                     <li><a href="{{asset('/darkom/web/app_dev.php/logout')}}">Déconnexion</a>*/
/*                                     </li>*/
/*                                    */
/*                                    */
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="container">*/
/*             </div>*/
/*         <!-- TOP AREA -->*/
/*          <div class="top-area show-onload">*/
/*             <div class="bg-holder full">*/
/*                 <div class="bg-mask"></div>*/
/*                 <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>*/
/*                 <video class="bg-video hidden-sm hidden-xs" preload="auto" autoplay="true" loop="loop" muted="muted" poster="img/video-bg.jpg">*/
/*                     <source src="{{asset('media/loop4.webm')}}" type="video/webm" />*/
/*                     <source src="{{asset('media/loop4.mp4')}}" type="video/mp4" />*/
/*                 </video>*/
/*                 */
/* <div class="bg-front full-height">*/
/*                     <div class="container rel full-height">*/
/*                         <div class="search-tabs search-tabs-bg search-tabs-bottom">*/
/*                                     */
/*                                 <div class="tabbable">*/
/*                                 <ul class="nav nav-tabs" id="myTab">*/
/*                                     <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >ajout Annonce</span></a>*/
/*                                     </li>*/
/*                                    <li ><a href="#tab-2" data-toggle="tab"><i class="fa fa-building-o"></i> <span >liste des annonces ajoutées</span></a>*/
/*                                     </li>*/
/*                                     <li ><a href="#tab-3" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Modification annonce</span></a>*/
/*                                     </li>*/
/*                                     */
/*                                    */
/*                                 </ul>*/
/*                                 <div class="tab-content">*/
/*                                     <div class="tab-pane fade in active" id="tab-1">*/
/*                                        <h2><a href="{{path('ajoutEvennement',{'id':app.User.id})}}">ajouter votre annonce</a></h2>*/
/*                                                */
/*                                                 {% block formulaire %}*/
/*                                                     {% endblock %}*/
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                         */
/*                                     </div>*/
/*                                     <div class="tab-pane fade " id="tab-2">*/
/*                                         <h2><a href="{{path('list',{'id':app.User.id})}}">liste des annonces ajoutées</a></h2>*/
/*                                                 {% block formulaire1 %}*/
/*                                                     {% endblock %}*/
/*                                             */
/*                                             */
/*                                             */
/*                                             */
/*                                     </div>*/
/*                                                     <div class="tab-pane fade " id="tab-3">*/
/*                                                      <h2><a href="{{path('esprit_darkom_modifier1',{'id':app.User.id})}}">modifier votre annonce </a></h2>*/
/*                                                   {% block formulaire2 %}*/
/*                                                     {% endblock %}*/
/* */
/* */
/* */
/* */
/*                                             </div> */
/*                                   */
/*                                     */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         */
/*         */
/*        */
/*         */
/* */
/* */
/* */
/*         */
/* */
/*         <script src={{asset("js/jquery.js")}}></script>*/
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
/*     </div>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
