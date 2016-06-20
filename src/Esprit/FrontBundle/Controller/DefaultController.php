<?php

namespace Esprit\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $latitude = '36.81881';
        $longitude='10.16596';
        return $this->render('EspritFrontBundle:Default:index.html.twig', array('latitude' => $latitude,'longitude' => $longitude));
    }
}
