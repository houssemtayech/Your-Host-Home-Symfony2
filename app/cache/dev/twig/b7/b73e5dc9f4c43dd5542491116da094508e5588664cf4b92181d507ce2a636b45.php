<?php

/* EspritFrontBundle:Default:base.html.twig */
class __TwigTemplate_615f4266d02eeb96d6a9e94c0f7aa0da7cedc3ee949b7eba71e4b1d5a991d812 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <style type=\"text/css\">html,body,#map-canvas {height: 100% ; margin: 0 ; padding: 0}</style>
        <script type=\"text/javascript\" src=\"http://maps.googleapis.com/maps/api/js?key=AIzaSyCVWPyzrKJ1QquFUa2cu9mhCvmOCgYn8vM\"></script>
        <script>
            function initialize() {
        var lat =document.getElementById('lat').value; 
        var lng =document.getElementById('lng').value;
        var mapProp = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 5,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                var map = new google.maps.Map(document.getElementById(\"googleMap\"), mapProp);
                var marker = new google.maps.Marker({ 
                    position: new google.maps.LatLng(lat, lng),
                    animation: google.maps.Animation.BOUNCE
                });
                marker.setMap(map);
            }
            function loadScript() {
                var script = document.createElement(\"script\");
                script.src = \"http://maps.googleapis.com/maps/api/js?callback=initialize\";
                document.body.appendChild(script);
            }
                window.onload = loadScript;
                
            google.maps.event.addDomListener(window, 'load', initialize);


        </script>
    </head>

    <body>
        ";
        // line 36
        $this->displayBlock('container', $context, $blocks);
        // line 39
        echo "
    </body>

</html>";
    }

    // line 36
    public function block_container($context, array $blocks = array())
    {
        // line 37
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "EspritFrontBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  69 => 37,  66 => 36,  59 => 39,  57 => 36,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <style type="text/css">html,body,#map-canvas {height: 100% ; margin: 0 ; padding: 0}</style>*/
/*         <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCVWPyzrKJ1QquFUa2cu9mhCvmOCgYn8vM"></script>*/
/*         <script>*/
/*             function initialize() {*/
/*         var lat =document.getElementById('lat').value; */
/*         var lng =document.getElementById('lng').value;*/
/*         var mapProp = {*/
/*                     center: new google.maps.LatLng(lat, lng),*/
/*                     zoom: 5,*/
/*                     mapTypeId: google.maps.MapTypeId.ROADMAP*/
/*                 };*/
/*                 var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);*/
/*                 var marker = new google.maps.Marker({ */
/*                     position: new google.maps.LatLng(lat, lng),*/
/*                     animation: google.maps.Animation.BOUNCE*/
/*                 });*/
/*                 marker.setMap(map);*/
/*             }*/
/*             function loadScript() {*/
/*                 var script = document.createElement("script");*/
/*                 script.src = "http://maps.googleapis.com/maps/api/js?callback=initialize";*/
/*                 document.body.appendChild(script);*/
/*             }*/
/*                 window.onload = loadScript;*/
/*                 */
/*             google.maps.event.addDomListener(window, 'load', initialize);*/
/* */
/* */
/*         </script>*/
/*     </head>*/
/* */
/*     <body>*/
/*         {% block container %}*/
/* */
/*         {% endblock %}*/
/* */
/*     </body>*/
/* */
/* </html>*/
