<?php

namespace Esprit\FrontBundle\Controller;

use Esprit\DarkomBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CommentaireController
 *
 * @author wezza
 */
class CommentaireController extends Controller {

    //put your code here

    public function listCommentaireAction($idOffre) {
        $em = $this->getDoctrine()->getManager();

        $commentaire = $em->getRepository('EspritDarkomBundle:Note')->findBy(array('idoffre' => $idOffre), null, null, null);

        return $this->render("EspritFrontBundle:OffreDetails:OffreDetails.html.twig", array('comm' => $commentaire));
    }

    public function ajoutCommentaireAction() {

        $commentaire = new Note();
        $Request = $this->get('request');

        if ($Request->getMethod() == 'POST') {
            $commentaire->setCommentaire($Request->get("commentaire"));
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush();
            return $this->render("EspritFrontBundle:OffreDetails:success.html.twig", array('comm' => $commentaire));
        }
        return ($this->render("EspritFrontBundle:OffreDetails:OffreDetails.html.twig", array()));
    }

    public function deleteCommentaireAction($id, $idOffre) {

        $em = $this->getDoctrine()->getManager();
        $commentaires = $em->getRepository('EspritDarkomBundle:Note')->find($id);
        $em->remove($commentaires);
        $em->flush();
        $commentaires1 = $em->getRepository('EspritDarkomBundle:Note')->findBy(array('idoffre' => $idOffre), null, null, null);
        return $this->render("EspritFrontBundle:OffreDetails:OffreDetails.html.twig", array('comm' => $commentaires1));
    }

    public function updateCommentaireAction($id) {

        $em = $this->get('doctrine')->getEntityManager();
        $commentaire = $em->getRepository('EspritDarkomBundle:Note')->find($id);
        $form = $this->createForm(new \Esprit\FrontBundle\Form\CommentaireForm(), $commentaire);
        $request = $this->getRequest();
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $commentaire = $form->getData();
            $em->persist($commentaire);
            $em->flush();
        }

        return $this->render('EspritFrontBundle:OffreDetails:OffreDetails.html.twig', array('comm' => $form->createView()));
    }

    public function reserverAction($id) {

        $request = $this->getRequest();
        if ($request->getMethod() == "POST") {

            $qB = $this->getDoctrine()->getEntityManager()->createQueryBuilder();
            $qB->update('EspritDarkomBundle:Offre', 'o')
                    ->set('o.publication', 3)
                    ->where('o.id = ' . $id)->getQuery()
                    ->execute();

//   ->setParameter(17, 100);




            return $this->render('EspritFrontBundle:OffreDetails:Reservation.html.twig', array());
        }
    }

    public function noteAction($id) {


        $em = $this->getDoctrine()->getManager();
$m=array('idoffre' => $id);
        $note = $em->getRepository('EspritDarkomBundle:Note')
                ->findBy($m, null, null, null);
        $i = count($note);
        $c = 0;
        for ($b = 0; $b == $i; $b++) {
            $c = $c + $note[$b].getNote;
        }
//        echo $i;
//        echo $c;

        return $this->render('EspritFrontBundle:OffreDetails:NoteMoyenne.html.twig', array(
        ));
    }

}
