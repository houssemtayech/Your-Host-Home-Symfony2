<?php

namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritDarkomBundle:Default:index.html.twig');
    }
    
    public function ErreurAction()
    {
        return $this->render('EspritUserBundle::404.html.twig');
    }
     public function emailAction()
    {
        return $this->render('EspritDarkomBundle:Default:email.html.twig');
    }
}
