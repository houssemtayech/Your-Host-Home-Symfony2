<?php

namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuthentificationController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritUserBundle:Security:login.html.twig');
    }
    
}
