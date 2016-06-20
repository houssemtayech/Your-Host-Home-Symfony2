<?php

namespace Esprit\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ErreurController extends Controller
{
    public function ErreurAction()
    {
        return $this->render('EspritUserBundle::404.html.twig');
    }
    
}
