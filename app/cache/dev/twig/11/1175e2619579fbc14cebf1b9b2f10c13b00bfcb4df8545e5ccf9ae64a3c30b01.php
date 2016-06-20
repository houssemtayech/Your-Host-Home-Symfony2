<?php

/* EspritUserBundle::inscription.html.twig */
class __TwigTemplate_db1fa6a9ea94aa52fedb8f830aa712b1e91d357fce7da89e66cccafbd1c1d495 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
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

<link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,100,300,500"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/form-elements.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
            <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel=\"shortcut icon\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/favicon.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">
</head>

<body >

    <!-- FACEBOOK WIDGET -->
    <div id=\"fb-root\"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = \"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0"), "html", null, true);
        echo "\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class=\"global-wrap\">
         <div class=\"top-area show-onload\">
        <header id=\"main-header\">
            <div class=\"header-top\">
                <div class=\"container\">
                    <div class=\"row\">
                        <div class=\"col-md-3\">
                            <a class=\"logo\" href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 69
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
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/login"), "html", null, true);
        echo "\">Connexion</a>
                                    </li>
                                   
                                   
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </header>
           
        <!-- TOP AREA -->
        
        
            <div class=\"bg-holder full\">
               
                <div class=\"bg-img\" style=\"background-image:url(img/2048x1365.png);\"></div>
                <video class=\"bg-video hidden-sm hidden-xs\" preload=\"auto\" autoplay=\"true\" loop=\"loop\" muted=\"muted\" poster=\"img/video-bg.jpg\">
                    <source src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop2.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop2.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
                    <div class=\"container rel full-height\">
                      
                                    <div class=\"top-content\" >
        \t
            <div  >
                <div class=\"container\" >
                    
                    <div class=\"row\">
                        <div class=\"col-sm-8 col-sm-offset-2 text\">
                            <h1><strong>Darkom</strong> Formulaire d'inscription</h1>
                            
                        </div>
                    </div>
                    <div class=\"row\">
                        
                        <div class=\"col-sm-6 col-sm-offset-3 form-box\" >
                            
                        \t<div class=\"form-top\">
                        \t\t<div class=\"form-top-left\">
                                            <h3>inscrivez-vous </h3>
                            \t\t<p>Entrer vos données pour s'inscrire</p>
                        \t\t</div>
                        \t\t<div class=\"form-top-right\">
                        \t\t\t<i class=\"fa fa-lock\"></i>
                        \t\t</div>
                            </div>
                            <div class=\"form-bottom\" >
                             ";
        // line 132
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 135
        echo "\t\t\t                   
\t\t                    </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            
        </div>
                                    
                            
                       
                    </div>
                </div>
            </div>
        </div>
       


        

        <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
         <script src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>
        
    </div>
</body>

</html>


";
    }

    // line 132
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 133
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "EspritUserBundle::inscription.html.twig", 133)->display($context);
    }

    public function getTemplateName()
    {
        return "EspritUserBundle::inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 133,  355 => 132,  342 => 179,  338 => 178,  334 => 177,  330 => 176,  326 => 175,  322 => 174,  318 => 173,  314 => 172,  310 => 171,  306 => 170,  302 => 169,  298 => 168,  294 => 167,  290 => 166,  286 => 165,  282 => 164,  278 => 163,  274 => 162,  270 => 161,  266 => 160,  262 => 159,  258 => 158,  254 => 157,  250 => 156,  227 => 135,  225 => 132,  191 => 101,  187 => 100,  164 => 80,  150 => 69,  146 => 68,  131 => 56,  115 => 43,  111 => 42,  107 => 41,  103 => 40,  99 => 39,  86 => 29,  82 => 28,  78 => 27,  74 => 26,  70 => 25,  65 => 23,  61 => 22,  57 => 21,  53 => 20,  49 => 19,  45 => 18,  40 => 16,  36 => 15,  20 => 1,);
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
/* <link rel="stylesheet" href="{{asset('http://fonts.googleapis.com/css?family=Roboto:400,100,300,500')}}">*/
/*         <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.min.css')}}">*/
/* 	<link rel="stylesheet" href="{{asset('assets/css/form-elements.css')}}">*/
/*         <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">*/
/* */
/*         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*         <!--[if lt IE 9]>*/
/*             <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*             <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/*         <!-- Favicon and touch icons -->*/
/*         <link rel="shortcut icon" href="{{asset('assets/ico/favicon.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/ico/apple-touch-icon-144-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/ico/apple-touch-icon-114-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/ico/apple-touch-icon-72-precomposed.png')}}">*/
/*         <link rel="apple-touch-icon-precomposed" href="{{asset('assets/ico/apple-touch-icon-57-precomposed.png')}}">*/
/* </head>*/
/* */
/* <body >*/
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
/*          <div class="top-area show-onload">*/
/*         <header id="main-header">*/
/*             <div class="header-top">*/
/*                 <div class="container">*/
/*                     <div class="row">*/
/*                         <div class="col-md-3">*/
/*                             <a class="logo" href="{{asset('index.html')}}">*/
/*                                 <img src="{{asset('img/logo-invert.png')}}" alt="Image Alternative text" title="Image Title" />*/
/*                             </a>*/
/*                         </div>*/
/*                             <div class="col-md-3 col-md-offset-2">*/
/*                             */
/*                         </div>*/
/*                             */
/*                         <div class="col-md-4">*/
/*                             <div class="top-user-area clearfix">*/
/*                                 <ul class="top-user-area-list list list-horizontal list-border">*/
/*                                     */
/*                                     <li><a href="{{asset('/darkom/web/app_dev.php/login')}}">Connexion</a>*/
/*                                     </li>*/
/*                                    */
/*                                    */
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/*            */
/*         <!-- TOP AREA -->*/
/*         */
/*         */
/*             <div class="bg-holder full">*/
/*                */
/*                 <div class="bg-img" style="background-image:url(img/2048x1365.png);"></div>*/
/*                 <video class="bg-video hidden-sm hidden-xs" preload="auto" autoplay="true" loop="loop" muted="muted" poster="img/video-bg.jpg">*/
/*                     <source src="{{asset('media/loop2.webm')}}" type="video/webm" />*/
/*                     <source src="{{asset('media/loop2.mp4')}}" type="video/mp4" />*/
/*                 </video>*/
/*                 */
/* <div class="bg-front full-height">*/
/*                     <div class="container rel full-height">*/
/*                       */
/*                                     <div class="top-content" >*/
/*         	*/
/*             <div  >*/
/*                 <div class="container" >*/
/*                     */
/*                     <div class="row">*/
/*                         <div class="col-sm-8 col-sm-offset-2 text">*/
/*                             <h1><strong>Darkom</strong> Formulaire d'inscription</h1>*/
/*                             */
/*                         </div>*/
/*                     </div>*/
/*                     <div class="row">*/
/*                         */
/*                         <div class="col-sm-6 col-sm-offset-3 form-box" >*/
/*                             */
/*                         	<div class="form-top">*/
/*                         		<div class="form-top-left">*/
/*                                             <h3>inscrivez-vous </h3>*/
/*                             		<p>Entrer vos données pour s'inscrire</p>*/
/*                         		</div>*/
/*                         		<div class="form-top-right">*/
/*                         			<i class="fa fa-lock"></i>*/
/*                         		</div>*/
/*                             </div>*/
/*                             <div class="form-bottom" >*/
/*                              {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* 			                   */
/* 		                    </div>*/
/*                         </div>*/
/*                     </div>*/
/*                    */
/*                 </div>*/
/*             </div>*/
/*             */
/*         </div>*/
/*                                     */
/*                             */
/*                        */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*        */
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
/*          <script src="{{asset('assets/js/jquery-1.11.1.min.js')}}"></script>*/
/*         <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>*/
/*         <script src="{{asset('assets/js/jquery.backstretch.min.js')}}"></script>*/
/*         <script src="{{asset('assets/js/scripts.js')}}"></script>*/
/*         */
/*     </div>*/
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
