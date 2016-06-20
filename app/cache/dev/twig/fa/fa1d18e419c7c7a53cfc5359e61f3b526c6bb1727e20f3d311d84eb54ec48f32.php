<?php

/* EspritDarkomBundle:Default:modifierClient.html.twig */
class __TwigTemplate_68c7b8a9d4e74a1cc4d286505ba2511067b13f995ca1270f66838fe76693b33a extends Twig_Template
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
        echo "




            
   
<!DOCTYPE HTML>
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,600"), "html", null, true);
        echo "\" rel='stylesheet' type='text/css'>
    <!-- /GOOGLE FONTS -->
    <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mystyles.css"), "html", null, true);
        echo "\">
    <script src=\"";
        // line 30
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
        // line 45
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
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("index.html"), "html", null, true);
        echo "\">
                                <img src=\"";
        // line 57
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
        // line 68
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
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop7.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
    
                    <div class=\"container rel full-height\">
                        <a href=\"http://localhost/darkom/web/app_dev.php/Client\"><h4 style=\"color: orange\"><-- Retourner au choix</h4></a>
                        <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                                
                                <div class=\"tabbable\">
                                <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Modifier votre Profil</span></a>
                                    </li>
                                   
                                    
                                    
                                </ul>
                                <div class=\"tab-content\">
                                    <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                        <h2>Mise à jours</h2>
                                      




        <div class=\"container\">
            <div class=\"row\">
               <form method=\"POST\"> 
        <section >
         
                <p class=\"setting\"><span>Nom : </span>  ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "nom", array()), 'widget');
        echo " </p> 
            
            <p class=\"setting\"><span>Prenom : </span>";
        // line 119
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "prenom", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "prenom", array()))));
        echo " </p> 
             <p class=\"setting\"><span>Email : </span>";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "email", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "email", array()))));
        echo " </p> 
            
            <p class=\"setting\"><span>Telephone : </span>";
        // line 122
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "Telephone", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "Telephone", array()))));
        echo " </p> 
            <p class=\"setting\"><span>Login : </span> ";
        // line 123
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), "username", array()), 'widget', array("attr" => array("value" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()))));
        echo " </p> 
            
           

            
            
            
            
            <input type=\"submit\" value=\"Enregistrer\" />
            </section>
                
                ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["Form"]) ? $context["Form"] : $this->getContext($context, "Form")), 'rest');
        echo " 
                </form>
            </div>
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
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:modifierClient.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 173,  306 => 172,  302 => 171,  298 => 170,  294 => 169,  290 => 168,  286 => 167,  282 => 166,  278 => 165,  274 => 164,  270 => 163,  266 => 162,  262 => 161,  258 => 160,  254 => 159,  250 => 158,  246 => 157,  242 => 156,  238 => 155,  234 => 154,  211 => 134,  197 => 123,  193 => 122,  188 => 120,  184 => 119,  179 => 117,  146 => 87,  142 => 86,  121 => 68,  107 => 57,  103 => 56,  89 => 45,  71 => 30,  67 => 29,  63 => 28,  59 => 27,  55 => 26,  51 => 25,  46 => 23,  42 => 22,  19 => 1,);
    }
}
/* */
/* */
/* */
/* */
/* */
/*             */
/*    */
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
/*                                     */
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
/*     */
/*                     <div class="container rel full-height">*/
/*                         <a href="http://localhost/darkom/web/app_dev.php/Client"><h4 style="color: orange"><-- Retourner au choix</h4></a>*/
/*                         <div class="search-tabs search-tabs-bg search-tabs-bottom">*/
/*                                 */
/*                                 <div class="tabbable">*/
/*                                 <ul class="nav nav-tabs" id="myTab">*/
/*                                     <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-building-o"></i> <span >Modifier votre Profil</span></a>*/
/*                                     </li>*/
/*                                    */
/*                                     */
/*                                     */
/*                                 </ul>*/
/*                                 <div class="tab-content">*/
/*                                     <div class="tab-pane fade in active" id="tab-1">*/
/*                                         <h2>Mise à jours</h2>*/
/*                                       */
/* */
/* */
/* */
/* */
/*         <div class="container">*/
/*             <div class="row">*/
/*                <form method="POST"> */
/*         <section >*/
/*          */
/*                 <p class="setting"><span>Nom : </span>  {{form_widget(Form.nom)}} </p> */
/*             */
/*             <p class="setting"><span>Prenom : </span>{{form_widget(Form.prenom,{'attr': {'value': app.user.prenom} })}} </p> */
/*              <p class="setting"><span>Email : </span>{{form_widget(Form.email,{'attr': {'value': app.user.email} })}} </p> */
/*             */
/*             <p class="setting"><span>Telephone : </span>{{form_widget(Form.Telephone,{'attr': {'value': app.user.Telephone} })}} </p> */
/*             <p class="setting"><span>Login : </span> {{form_widget(Form.username,{'attr': {'value': app.user.username} })}} </p> */
/*             */
/*            */
/* */
/*             */
/*             */
/*             */
/*             */
/*             <input type="submit" value="Enregistrer" />*/
/*             </section>*/
/*                 */
/*                 {{ form_rest(Form) }} */
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*                                     </div>*/
/*                                     */
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
