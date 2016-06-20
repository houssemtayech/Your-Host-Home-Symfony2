<?php

/* EspritDarkomBundle:Default:Client.html.twig */
class __TwigTemplate_c318ef9aa0de4dc1cea8819f7c155a6005c09f328c4ac0b9e06e6a3b68bafe82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
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

    
    <div class=\"global-wrap\">
        <header id=\"main-header\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <a class=\"logo\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 38
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
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modifierClient", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "id", array()))), "html", null, true);
        echo "\"><span style=\"color: white\">hi ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "User", array()), "prenom", array()), "html", null, true);
        echo " !</span></a>
                                    </li>
                                    <li><a href=\"";
        // line 50
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
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
                    <div class=\"container rel full-height\">
                        <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                                  
                                <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Rechercher</span></a>
                                    </li>
                                   <li ><a href=\"#tab-2\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Réclamation</span></a>
                                    </li>
                                    
                                      
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                          <h2><a href=\"http://localhost/darkom/web/app_dev.php/recherche\">Trouver Votre Choix</a></h2>
                
                    ";
        // line 89
        $this->displayBlock('formulaire1', $context, $blocks);
        // line 91
        echo "                                      
                                </div>
                                    <div class=\"tab-pane fade \" id=\"tab-2\">
                                        <h2><a href=\"http://localhost/darkom/web/app_dev.php/ajoutReclamation\">Réclamer</a></h2>
                                      
                                        ";
        // line 96
        $this->displayBlock('formulaire2', $context, $blocks);
        // line 98
        echo "                                        
                                </div>
                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        
        <div class=\"bg-holder\">
            <div class=\"bg-mask\"></div>
            <div class=\"bg-parallax\" style=\"background-image:url(img/2048x1310.png);\"></div>
            <div class=\"bg-content\">
                <div class=\"container\">
                    <div class=\"gap gap-big text-center text-white\">
                        <h2 class=\"text-uc mb20\">Offre Recent</h2>
                        <ul class=\"icon-list list-inline-block mb0 last-minute-rating\">
                            <li><i class=\"fa fa-star\"></i>
                            </li>
                            <li><i class=\"fa fa-star\"></i>
                            </li>
                            <li><i class=\"fa fa-star\"></i>
                            </li>
                            <li><i class=\"fa fa-star\"></i>
                            </li>
                            <li><i class=\"fa fa-star\"></i>
                            </li>
                        </ul>
                        <h5 class=\"last-minute-title\">Ariana</h5>
                        <p class=\"last-minute-date\">Ven 14 Mar - Dim 16 Mar</p>
                        <p class=\"mb20\"><b>120DT</b> </p><a class=\"btn btn-lg btn-white btn-ghost\" href=\"#\">Reserver Maintenant <i class=\"fa fa-angle-right\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"gap\"></div>
            <h2 class=\"text-center\">Top Destinations</h2>
            <div class=\"gap\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"img/800x600.png\" alt=\"Image Alternative text\" title=\"Upper Lake in New York Central Park\" /><i class=\"fa fa-plus box-icon-white box-icon-border hover-icon-top-right round\"></i>
                                </a>
                            </header>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\">Nabeul</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"img/800x600.png\" alt=\"Image Alternative text\" title=\"lack of blue depresses me\" /><i class=\"fa fa-plus box-icon-white box-icon-border hover-icon-top-right round\"></i>
                                </a>
                            </header>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\">Djerba</h4>
                               
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"img/800x600.png\" alt=\"Image Alternative text\" title=\"people on the beach\" /><i class=\"fa fa-plus box-icon-white box-icon-border hover-icon-top-right round\"></i>
                                </a>
                            </header>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\">Bizerte</h4>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3\">
                        <div class=\"thumb\">
                            <header class=\"thumb-header\">
                                <a class=\"hover-img curved\" href=\"#\">
                                    <img src=\"img/400x300.png\" alt=\"Image Alternative text\" title=\"the journey home\" /><i class=\"fa fa-plus box-icon-white box-icon-border hover-icon-top-right round\"></i>
                                </a>
                            </header>
                            <div class=\"thumb-caption\">
                                <h4 class=\"thumb-title\">Ariana</h4>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>



        <footer id=\"main-footer\">
            <div class=\"container\">
                <div class=\"row row-wrap\">
                    <div class=\"col-md-3\">
                        <a class=\"logo\" href=\"index.html\">
                            <img src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-invert.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" />
                        </a>
                        <p class=\"mb20\">Reservations, commentaires et conseils à propos des maisons d'hotes</p>
                        <ul class=\"list list-horizontal list-space\">
                            <li>
                                <a class=\"fa fa-facebook box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-twitter box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                            <li>
                                <a class=\"fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top\" href=\"#\"></a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-md-3\">
                        <h4>Newsletter</h4>
                        <form>
                            <label>Entrer votre adresse E-mail </label>
                            <input type=\"text\" class=\"form-control\">
                            
                            <input type=\"submit\" class=\"btn btn-primary\" value=\"Suivez-nous\">
                        </form>
                    </div>
                    
                    <div class=\"col-md-4\">
                        <h4>Vous avez des Questions?</h4>
                        <h4 class=\"text-color\">+216-27-66-01-57</h4>
                        <h4><a href=\"#\" class=\"text-color\">admdarkom@gmail.com</a></h4>
                        
                    </div>

                </div>
            </div>
        </footer>

        <script src=";
        // line 249
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 258
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 261
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 264
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 266
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    // line 89
    public function block_formulaire1($context, array $blocks = array())
    {
        // line 90
        echo "                    ";
    }

    // line 96
    public function block_formulaire2($context, array $blocks = array())
    {
        // line 97
        echo "                    ";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:Client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  420 => 97,  417 => 96,  413 => 90,  410 => 89,  398 => 268,  394 => 267,  390 => 266,  386 => 265,  382 => 264,  378 => 263,  374 => 262,  370 => 261,  366 => 260,  362 => 259,  358 => 258,  354 => 257,  350 => 256,  346 => 255,  342 => 254,  338 => 253,  334 => 252,  330 => 251,  326 => 250,  322 => 249,  276 => 206,  166 => 98,  164 => 96,  157 => 91,  155 => 89,  132 => 69,  128 => 68,  107 => 50,  100 => 48,  87 => 38,  83 => 37,  66 => 23,  62 => 22,  58 => 21,  54 => 20,  50 => 19,  46 => 18,  41 => 16,  37 => 15,  21 => 1,);
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
/*     */
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
/*                                     <li><a href="{{path('modifierClient',{'id':app.User.id})}}"><span style="color: white">hi {{app.User.prenom}} !</span></a>*/
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
/*                                   */
/*                                 <div class="tabbable">*/
/*                                 <ul class="nav nav-tabs" id="myTab">*/
/*                                     <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Rechercher</span></a>*/
/*                                     </li>*/
/*                                    <li ><a href="#tab-2" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Réclamation</span></a>*/
/*                                     </li>*/
/*                                     */
/*                                       */
/*                                 </ul>*/
/*                                 <div class="tab-content">*/
/*                                     <div class="tab-pane fade in active" id="tab-1">*/
/*                                           <h2><a href="http://localhost/darkom/web/app_dev.php/recherche">Trouver Votre Choix</a></h2>*/
/*                 */
/*                     {% block formulaire1 %}*/
/*                     {% endblock %}*/
/*                                       */
/*                                 </div>*/
/*                                     <div class="tab-pane fade " id="tab-2">*/
/*                                         <h2><a href="http://localhost/darkom/web/app_dev.php/ajoutReclamation">Réclamer</a></h2>*/
/*                                       */
/*                                         {% block formulaire2 %}*/
/*                     {% endblock %}*/
/*                                         */
/*                                 </div>*/
/*                     */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         */
/*         */
/*         <div class="bg-holder">*/
/*             <div class="bg-mask"></div>*/
/*             <div class="bg-parallax" style="background-image:url(img/2048x1310.png);"></div>*/
/*             <div class="bg-content">*/
/*                 <div class="container">*/
/*                     <div class="gap gap-big text-center text-white">*/
/*                         <h2 class="text-uc mb20">Offre Recent</h2>*/
/*                         <ul class="icon-list list-inline-block mb0 last-minute-rating">*/
/*                             <li><i class="fa fa-star"></i>*/
/*                             </li>*/
/*                             <li><i class="fa fa-star"></i>*/
/*                             </li>*/
/*                             <li><i class="fa fa-star"></i>*/
/*                             </li>*/
/*                             <li><i class="fa fa-star"></i>*/
/*                             </li>*/
/*                             <li><i class="fa fa-star"></i>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <h5 class="last-minute-title">Ariana</h5>*/
/*                         <p class="last-minute-date">Ven 14 Mar - Dim 16 Mar</p>*/
/*                         <p class="mb20"><b>120DT</b> </p><a class="btn btn-lg btn-white btn-ghost" href="#">Reserver Maintenant <i class="fa fa-angle-right"></i></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="container">*/
/*             <div class="gap"></div>*/
/*             <h2 class="text-center">Top Destinations</h2>*/
/*             <div class="gap">*/
/*                 <div class="row row-wrap">*/
/*                     <div class="col-md-3">*/
/*                         <div class="thumb">*/
/*                             <header class="thumb-header">*/
/*                                 <a class="hover-img curved" href="#">*/
/*                                     <img src="img/800x600.png" alt="Image Alternative text" title="Upper Lake in New York Central Park" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>*/
/*                                 </a>*/
/*                             </header>*/
/*                             <div class="thumb-caption">*/
/*                                 <h4 class="thumb-title">Nabeul</h4>*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="thumb">*/
/*                             <header class="thumb-header">*/
/*                                 <a class="hover-img curved" href="#">*/
/*                                     <img src="img/800x600.png" alt="Image Alternative text" title="lack of blue depresses me" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>*/
/*                                 </a>*/
/*                             </header>*/
/*                             <div class="thumb-caption">*/
/*                                 <h4 class="thumb-title">Djerba</h4>*/
/*                                */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="thumb">*/
/*                             <header class="thumb-header">*/
/*                                 <a class="hover-img curved" href="#">*/
/*                                     <img src="img/800x600.png" alt="Image Alternative text" title="people on the beach" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>*/
/*                                 </a>*/
/*                             </header>*/
/*                             <div class="thumb-caption">*/
/*                                 <h4 class="thumb-title">Bizerte</h4>*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="col-md-3">*/
/*                         <div class="thumb">*/
/*                             <header class="thumb-header">*/
/*                                 <a class="hover-img curved" href="#">*/
/*                                     <img src="img/400x300.png" alt="Image Alternative text" title="the journey home" /><i class="fa fa-plus box-icon-white box-icon-border hover-icon-top-right round"></i>*/
/*                                 </a>*/
/*                             </header>*/
/*                             <div class="thumb-caption">*/
/*                                 <h4 class="thumb-title">Ariana</h4>*/
/*                                 */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/* */
/*         </div>*/
/* */
/* */
/* */
/*         <footer id="main-footer">*/
/*             <div class="container">*/
/*                 <div class="row row-wrap">*/
/*                     <div class="col-md-3">*/
/*                         <a class="logo" href="index.html">*/
/*                             <img src="{{asset('img/logo-invert.png')}}" alt="Image Alternative text" title="Image Title" />*/
/*                         </a>*/
/*                         <p class="mb20">Reservations, commentaires et conseils à propos des maisons d'hotes</p>*/
/*                         <ul class="list list-horizontal list-space">*/
/*                             <li>*/
/*                                 <a class="fa fa-facebook box-icon-normal round animate-icon-bottom-to-top" href="#"></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="fa fa-twitter box-icon-normal round animate-icon-bottom-to-top" href="#"></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="fa fa-google-plus box-icon-normal round animate-icon-bottom-to-top" href="#"></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="fa fa-linkedin box-icon-normal round animate-icon-bottom-to-top" href="#"></a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a class="fa fa-pinterest box-icon-normal round animate-icon-bottom-to-top" href="#"></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/* */
/*                     <div class="col-md-3">*/
/*                         <h4>Newsletter</h4>*/
/*                         <form>*/
/*                             <label>Entrer votre adresse E-mail </label>*/
/*                             <input type="text" class="form-control">*/
/*                             */
/*                             <input type="submit" class="btn btn-primary" value="Suivez-nous">*/
/*                         </form>*/
/*                     </div>*/
/*                     */
/*                     <div class="col-md-4">*/
/*                         <h4>Vous avez des Questions?</h4>*/
/*                         <h4 class="text-color">+216-27-66-01-57</h4>*/
/*                         <h4><a href="#" class="text-color">admdarkom@gmail.com</a></h4>*/
/*                         */
/*                     </div>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </footer>*/
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
