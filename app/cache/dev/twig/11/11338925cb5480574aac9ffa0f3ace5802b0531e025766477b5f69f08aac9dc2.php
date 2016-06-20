<?php

/* EspritDarkomBundle:Default:Admin.html.twig */
class __TwigTemplate_4178527bd10a18cc89bfcb2f904a58d26f2222213e9aeff57bfa9736756c95e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'formulaire3' => array($this, 'block_formulaire3'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierClient", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\"><span style=\"color: white\">hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "nom", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
                    <div class=\"container rel full-height\">
                        <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                              
                                <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Offres</span></a>
                                    </li>
                                 
                                    <li ><a href=\"#tab-2\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Commentaires</span></a>
                                    </li>  
                                 
                                    <li ><a href=\"#tab-3\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Statistiques</span></a>
                                    </li>
                                   
                                    <li ><a href=\"#tab-4\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Réclamations</span></a>
                                    </li>
                                    
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                        <h2> <a href=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/darkom/web/app_dev.php/trouverOffreNonApprouver"), "html", null, true);
        echo "\">Approuver/Desapprouver Offres</a></h2>
                                    
                                    </div>
                                
                                    <div class=\"tab-pane fade\" id=\"tab-2\">
                                        <h2><a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/darkom/web/app_dev.php/trouverCommentaireNonApprouver"), "html", null, true);
        echo "\">Approuver/Desapprouver Commentaires</a></h2>
                                     
                                    </div>
                                       
                                    <div class=\"tab-pane fade \" id=\"tab-3\">
                                        <h2>Statistiques</h2>
                                        <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/darkom/web/app_dev.php/Graphe/histogramme"), "html", null, true);
        echo "\">Statistiques des Offres</a><br>
                                     <a href=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://localhost/darkom/web/app_dev.php/Graphe/histogramme1"), "html", null, true);
        echo "\">Statistiques des Membres</a>
                                    </div>
                                            
                                    <div class=\"tab-pane fade \" id=\"tab-4\">
                                        <h2><a href=\"http://localhost/darkom/web/app_dev.php/listReclamation\">Consulter Réclamations</a></h2>
                                        
                                        ";
        // line 123
        $this->displayBlock('formulaire3', $context, $blocks);
        // line 125
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
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    // line 123
    public function block_formulaire3($context, array $blocks = array())
    {
        // line 124
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:Admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 124,  314 => 123,  302 => 163,  298 => 162,  294 => 161,  290 => 160,  286 => 159,  282 => 158,  278 => 157,  274 => 156,  270 => 155,  266 => 154,  262 => 153,  258 => 152,  254 => 151,  250 => 150,  246 => 149,  242 => 148,  238 => 147,  234 => 146,  230 => 145,  226 => 144,  205 => 125,  203 => 123,  194 => 117,  190 => 116,  181 => 110,  173 => 105,  146 => 81,  142 => 80,  121 => 62,  114 => 60,  101 => 50,  97 => 49,  83 => 38,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  40 => 16,  36 => 15,  20 => 1,);
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
/*                                     <li><a href="{{path('modifierClient',{'id':app.User.id})}}"><span style="color: white">hi {{app.User.nom}} !</span></a>*/
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
/*                     <source src="{{asset('media/loop7.webm')}}" type="video/webm" />*/
/*                     <source src="{{asset('media/loop7.mp4')}}" type="video/mp4" />*/
/*                 </video>*/
/*                 */
/* <div class="bg-front full-height">*/
/*                     <div class="container rel full-height">*/
/*                         <div class="search-tabs search-tabs-bg search-tabs-bottom">*/
/*                               */
/*                                 <div class="tabbable">*/
/*                                 <ul class="nav nav-tabs" id="myTab">*/
/*                                     <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Offres</span></a>*/
/*                                     </li>*/
/*                                  */
/*                                     <li ><a href="#tab-2" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Commentaires</span></a>*/
/*                                     </li>  */
/*                                  */
/*                                     <li ><a href="#tab-3" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Statistiques</span></a>*/
/*                                     </li>*/
/*                                    */
/*                                     <li ><a href="#tab-4" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Réclamations</span></a>*/
/*                                     </li>*/
/*                                     */
/*                                 </ul>*/
/*                                 <div class="tab-content">*/
/*                                     <div class="tab-pane fade in active" id="tab-1">*/
/*                                         <h2> <a href="{{asset('http://localhost/darkom/web/app_dev.php/trouverOffreNonApprouver')}}">Approuver/Desapprouver Offres</a></h2>*/
/*                                     */
/*                                     </div>*/
/*                                 */
/*                                     <div class="tab-pane fade" id="tab-2">*/
/*                                         <h2><a href="{{asset('http://localhost/darkom/web/app_dev.php/trouverCommentaireNonApprouver')}}">Approuver/Desapprouver Commentaires</a></h2>*/
/*                                      */
/*                                     </div>*/
/*                                        */
/*                                     <div class="tab-pane fade " id="tab-3">*/
/*                                         <h2>Statistiques</h2>*/
/*                                         <a href="{{asset('http://localhost/darkom/web/app_dev.php/Graphe/histogramme')}}">Statistiques des Offres</a><br>*/
/*                                      <a href="{{asset('http://localhost/darkom/web/app_dev.php/Graphe/histogramme1')}}">Statistiques des Membres</a>*/
/*                                     </div>*/
/*                                             */
/*                                     <div class="tab-pane fade " id="tab-4">*/
/*                                         <h2><a href="http://localhost/darkom/web/app_dev.php/listReclamation">Consulter Réclamations</a></h2>*/
/*                                         */
/*                                         {% block formulaire3 %}*/
/*                     {% endblock %}*/
/*                                      */
/*                                     </div>*/
/*                                     */
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
/*         */
/* */
/* */
/* */
/*        */
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
