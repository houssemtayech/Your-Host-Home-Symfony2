<?php

/* EspritDarkomBundle:Default:layout.html.twig */
class __TwigTemplate_ea3694b5f89a540b1b8ffa336a6382aa05bc8c9a58c1bf0f1ad8c2d030489e2c extends Twig_Template
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
                                    <li class=\"top-user-area-avatar\">
                                       
                                    </li>
                                    <li><a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/darkom/web/app_dev.php/Authentification"), "html", null, true);
        echo "\">Connexion</a>
                                    </li>
                                   
                                    <li class=\"top-user-area-lang nav-drop\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/32/uk.png"), "html", null, true);
        echo "\"  />ENG<i class=\"fa fa-angle-down\"></i><i class=\"fa fa-angle-up\"></i>
                                        </a>
                                        <ul class=\"list nav-drop-menu\">
                                            <li>
                                                <a title=\"German\" href=\"#\">
                                                    <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/32/de.png"), "html", null, true);
        echo "\"  /><span class=\"right\">GER</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title=\"Japanise\" href=\"#\">
                                                    <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/32/jp.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" /><span class=\"right\">JAP</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title=\"Italian\" href=\"#\">
                                                    <img src=\"img/flags/32/it.png\" alt=\"Image Alternative text\" title=\"Image Title\" /><span class=\"right\">ITA</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title=\"French\" href=\"#\">
                                                    <img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/flags/32/fr.png"), "html", null, true);
        echo "\" alt=\"Image Alternative text\" title=\"Image Title\" /><span class=\"right\">FRE</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title=\"Russian\" href=\"#\">
                                                    <img src=\"img/flags/32/ru.png\" alt=\"Image Alternative text\" title=\"Image Title\" /><span class=\"right\">RUS</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a title=\"Korean\" href=\"#\">
                                                    <img src=\"img/flags/32/kr.png\" alt=\"Image Alternative text\" title=\"Image Title\" /><span class=\"right\">KOR</span>
                                                </a>
                                            </li>
                                        </ul>
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
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop.webm"), "html", null, true);
        echo "\" type=\"video/webm\" />
                    <source src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("media/loop.mp4"), "html", null, true);
        echo "\" type=\"video/mp4\" />
                </video>
                
<div class=\"bg-front full-height\">
                    <div class=\"container rel full-height\">
                        <div class=\"search-tabs search-tabs-bg search-tabs-bottom\">
                                    
                                    <div class=\"tabbable\">
                                        <ul class=\"nav nav-tabs\" id=\"myTab\">
                                            <li class=\"active\"><a href=\"#tab-1\" data-toggle=\"tab\"><i class=\"fa fa-building-o\"></i> <span >Recherche</span></a>
                                            </li>
                                            
                                        </ul>
                                        <div class=\"tab-content\">
                                            <div class=\"tab-pane fade in active\" id=\"tab-1\">
                                                <h2>Rechercher votre choix</h2>
                                                <form>
                                                   <div class=\"row\">
                                                <div class=\"col-md-4\">
                                                    <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-map-marker input-icon\"></i>
                                                        <label>Où vous voulez aller ?</label>
                                                        <input class=\"typeahead form-control\" placeholder=\"Ville , Localité , Code postal ...\" type=\"text\" />
                                                    </div>
                                                </div>
                                                <div class=\"col-md-8\">
                                                    <div class=\"input-daterange\" data-date-format=\"M d, D\">
                                                        <div class=\"row\">
                                                            <div class=\"col-md-3\">
                                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                    <label>Date début</label>
                                                                    <input class=\"form-control\" name=\"start\" type=\"text\" />
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                <div class=\"form-group form-group-lg form-group-icon-left\"><i class=\"fa fa-calendar input-icon input-icon-highlight\"></i>
                                                                    <label>Date fin</label>
                                                                    <input class=\"form-control\" name=\"end\" type=\"text\" />
                                                                </div>
                                                            </div>
                                                            
                                                            <div class=\"col-md-3\">
                                                                <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                    <label>Nombre de chambres</label>
                                                                    <div class=\"btn-group btn-group-select-num\" data-toggle=\"buttons\">
                                                                        <label class=\"btn btn-primary active\">
                                                                            <input type=\"radio\" name=\"options\" />1</label>
                                                                        <label class=\"btn btn-primary\">
                                                                            <input type=\"radio\" name=\"options\" />2</label>
                                                                        <label class=\"btn btn-primary\">
                                                                            <input type=\"radio\" name=\"options\" />3</label>
                                                                        <label class=\"btn btn-primary\">
                                                                            <input type=\"radio\" name=\"options\" />3+</label>
                                                                    </div>
                                                                    <select class=\"form-control hidden\">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option selected=\"selected\">4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class=\"col-md-3\">
                                                                <div class=\"form-group form-group-lg form-group-select-plus\">
                                                                    
                                                                    <select class=\"form-control hidden\">
                                                                        <option>1</option>
                                                                        <option>2</option>
                                                                        <option>3</option>
                                                                        <option selected=\"selected\">4</option>
                                                                        <option>5</option>
                                                                        <option>6</option>
                                                                        <option>7</option>
                                                                        <option>8</option>
                                                                        <option>9</option>
                                                                        <option>10</option>
                                                                        <option>11</option>
                                                                        <option>12</option>
                                                                        <option>13</option>
                                                                        <option>14</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        
                                                    
                                                    <button class=\"btn btn-primary btn-lg\" type=\"submit\">Rechecher</button>
                                                </div></div>
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
        <!-- END TOP AREA  -->

        
        <div class=\"container\">
            <div class=\"row row-wrap\" data-gutter=\"60\">
                <div class=\"col-md-4\">
                    <div class=\"thumb\">
                        <header class=\"thumb-header\"><i class=\"fa fa-briefcase box-icon-md round box-icon-black animate-icon-top-to-bottom\"></i>
                        </header>
                        <div class=\"thumb-caption\">
                            <h5 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Combine & Save</a></h5>
                            <p class=\"thumb-desc\">Sagittis non laoreet augue nulla lectus auctor accumsan cubilia sollicitudin mattis leo</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"thumb\">
                        <header class=\"thumb-header\"><i class=\"fa fa-thumbs-o-up box-icon-md round box-icon-black animate-icon-top-to-bottom\"></i>
                        </header>
                        <div class=\"thumb-caption\">
                            <h5 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Best Travel Agent</a></h5>
                            <p class=\"thumb-desc\">Vel morbi class sollicitudin cubilia quisque penatibus dictumst faucibus dui natoque ultricies</p>
                        </div>
                    </div>
                </div>
                <div class=\"col-md-4\">
                    <div class=\"thumb\">
                        <header class=\"thumb-header\"><i class=\"fa fa-lock box-icon-md round box-icon-black animate-icon-top-to-bottom\"></i>
                        </header>
                        <div class=\"thumb-caption\">
                            <h5 class=\"thumb-title\"><a class=\"text-darken\" href=\"#\">Trust & Safety</a></h5>
                            <p class=\"thumb-desc\">Montes congue pellentesque aliquet lectus dictum est volutpat class odio elementum quis</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"gap gap-small\"></div>
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
        // line 365
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
        // line 408
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 409
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 410
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/slimmenu.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 411
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-datepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 412
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap-timepicker.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/nicescroll.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 414
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/dropit.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 415
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/ionrangeslider.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 416
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/icheck.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 417
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fotorama.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 418
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"), "html", null, true);
        echo "></script>
        <script src=";
        // line 419
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/typeahead.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 420
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/card-payment.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 421
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/magnific.js"), "html", null, true);
        echo "></script>
        <script src=";
        // line 422
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/owl-carousel.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 423
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/fitvids.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/tweet.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/countdown.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/gridrotator.js"), "html", null, true);
        echo "></script>
         <script src=";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "></script>
    </div>
</body>

</html>


";
    }

    public function getTemplateName()
    {
        return "EspritDarkomBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 427,  557 => 426,  553 => 425,  549 => 424,  545 => 423,  541 => 422,  537 => 421,  533 => 420,  529 => 419,  525 => 418,  521 => 417,  517 => 416,  513 => 415,  509 => 414,  505 => 413,  501 => 412,  497 => 411,  493 => 410,  489 => 409,  485 => 408,  439 => 365,  193 => 122,  189 => 121,  157 => 92,  144 => 82,  136 => 77,  128 => 72,  120 => 67,  100 => 50,  96 => 49,  82 => 38,  64 => 23,  60 => 22,  56 => 21,  52 => 20,  48 => 19,  44 => 18,  39 => 16,  35 => 15,  19 => 1,);
    }
}
