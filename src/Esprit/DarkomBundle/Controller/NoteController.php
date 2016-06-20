<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Description of NoteController
 *
 * @author Houssem
 */
class NoteController extends Controller {

    public function trouverCommentaireNonApprouverAction() {
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository("EspritDarkomBundle:Note")
                ->findByStatut('0');
        return ($this->render("EspritDarkomBundle:Note:list.html.twig", array("Note" => $notes)));
    }

    public function accepterAction($id) {

        $em = $this->getDoctrine()->getManager();
        $commentaire1 = $em->getRepository('EspritDarkomBundle:Note')->find($id);
        $commentaire1->setStatut('1');
        $em->flush();
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository("EspritDarkomBundle:Note")
                ->findByStatut('0');
        return ($this->render("EspritDarkomBundle:Note:list.html.twig", array("Note" => $notes)));
    }

    public function refuserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $commentaire2 = $em->getRepository('EspritDarkomBundle:Note')->find($id);
        $commentaire2->setStatut('2');
        $em->flush();
        $em = $this->getDoctrine()->getManager();
        $notes = $em->getRepository("EspritDarkomBundle:Note")
                ->findByStatut('0');
        return ($this->render("EspritDarkomBundle:Note:list.html.twig", array("Note" => $notes)));
    }

}
