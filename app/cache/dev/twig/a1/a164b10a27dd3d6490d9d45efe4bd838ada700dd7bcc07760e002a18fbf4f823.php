<?php

/* EspritDarkomBundle:Default:email.html.twig */
class __TwigTemplate_2a9341c32643e2bc9e39e6f7de965acf63c8126d25ba870e1c20581373cf4a24 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<html>

<head>
    <title>Darkom - Contact Us</title>


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
                            <form class=\"main-header-search\">
                                <div class=\"form-group form-group-icon-left\">
                                    <i class=\"fa fa-search input-icon\"></i>
                                    <input type=\"text\" class=\"form-control\">
                                </div>
                            </form>
                        </div>
                        <div class=\"col-md-4\">
                            <div class=\"top-user-area clearfix\">
                                <ul class=\"top-user-area-list list list-horizontal list-border\">
                                    
                                    <li><a href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/login"), "html", null, true);
        echo "\">Connexion</a>
                                    </li>
                                   </li>
                                    <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/register"), "html", null, true);
        echo "\">Inscription</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class=\"container\">
            <h1 class=\"page-title\">Contacter nous</h1>
        </div>
                               




        
        
        <div class=\"container\">
            <div class=\"gap\"></div>
            <div class=\"row\">
                <div class=\"col-md-7\">
                    
                    <form class=\"mt30\" method=\"POST\" action=\"";
        // line 82
        echo $this->env->getExtension('routing')->getPath("esprit_darkom_mail_sendpage");
        echo "\">
                        <div class=\"row\">
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Nom</label>
                                    <input class=\"form-control\" type=\"text\" name=\"nom\" />
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>E-mail</label>
                                    <input class=\"form-control\" type=\"text\" name=\"from\" />
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Message</label>
                            <textarea class=\"form-control\" name=\"message\"></textarea>
                        </div>
                        <input class=\"btn btn-primary\" type=\"submit\" value=\"Send Message\"  />
                    </form>
                </div>
                <div class=\"col-md-4\">
                    <aside class=\"sidebar-right\">
                        <ul class=\"address-list list\">
                            <li>
                                <h5>Email</h5><a href=\"#\">admdarkom@gmail.com</a>
                            </li>
                            <li>
                                <h5>Phone Number</h5><a href=\"#\">+216-27-66-01-57</a>
                            </li>
                            <li>
                                <h5>Skype</h5><a href=\"#\">contact_Darkom</a>
                            </li>
                            <li>
                                <h5>Address</h5><address> Z.I. Chotrana II B.P. 160 Pôle Technologique El Ghazela، أريانة 2088</address>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
            <div class=\"gap\"></div>
        </div>



        

         <script src=";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 149,  261 => 148,  257 => 147,  253 => 146,  249 => 145,  245 => 144,  241 => 143,  237 => 142,  233 => 141,  229 => 140,  225 => 139,  221 => 138,  217 => 137,  213 => 136,  209 => 135,  205 => 134,  201 => 133,  197 => 132,  193 => 131,  189 => 130,  138 => 82,  109 => 56,  103 => 53,  85 => 38,  81 => 37,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/* */
/* <head>*/
/*     <title>Darkom - Contact Us</title>*/
/* */
/* */
/*    <meta content="text/html;charset=utf-8" http-equiv="Content-Type">*/
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
/*                             <form class="main-header-search">*/
/*                                 <div class="form-group form-group-icon-left">*/
/*                                     <i class="fa fa-search input-icon"></i>*/
/*                                     <input type="text" class="form-control">*/
/*                                 </div>*/
/*                             </form>*/
/*                         </div>*/
/*                         <div class="col-md-4">*/
/*                             <div class="top-user-area clearfix">*/
/*                                 <ul class="top-user-area-list list list-horizontal list-border">*/
/*                                     */
/*                                     <li><a href="{{asset('/darkom/web/app_dev.php/login')}}">Connexion</a>*/
/*                                     </li>*/
/*                                    </li>*/
/*                                     <li><a href="{{asset('/darkom/web/app_dev.php/register')}}">Inscription</a>*/
/*                                     </li>*/
/*                                    */
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </header>*/
/* */
/*         <div class="container">*/
/*             <h1 class="page-title">Contacter nous</h1>*/
/*         </div>*/
/*                                */
/* */
/* */
/* */
/* */
/*         */
/*         */
/*         <div class="container">*/
/*             <div class="gap"></div>*/
/*             <div class="row">*/
/*                 <div class="col-md-7">*/
/*                     */
/*                     <form class="mt30" method="POST" action="{{path('esprit_darkom_mail_sendpage')}}">*/
/*                         <div class="row">*/
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/*                                     <label>Nom</label>*/
/*                                     <input class="form-control" type="text" name="nom" />*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="col-md-6">*/
/*                                 <div class="form-group">*/
/*                                     <label>E-mail</label>*/
/*                                     <input class="form-control" type="text" name="from" />*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label>Message</label>*/
/*                             <textarea class="form-control" name="message"></textarea>*/
/*                         </div>*/
/*                         <input class="btn btn-primary" type="submit" value="Send Message"  />*/
/*                     </form>*/
/*                 </div>*/
/*                 <div class="col-md-4">*/
/*                     <aside class="sidebar-right">*/
/*                         <ul class="address-list list">*/
/*                             <li>*/
/*                                 <h5>Email</h5><a href="#">admdarkom@gmail.com</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h5>Phone Number</h5><a href="#">+216-27-66-01-57</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h5>Skype</h5><a href="#">contact_Darkom</a>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <h5>Address</h5><address> Z.I. Chotrana II B.P. 160 Pôle Technologique El Ghazela، أريانة 2088</address>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </aside>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="gap"></div>*/
/*         </div>*/
/* */
/* */
/* */
/*         */
/* */
/*          <script src={{asset("js/jquery.js")}}></script>*/
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
