<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ReclamationController
 *
 * @author pc
 */
namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Esprit\DarkomBundle\Entity\Reclamation;



class ReclamationController extends Controller{
   public function ajoutReclamationAction() {
        $rec = new Reclamation();
    
        $Request = $this->getRequest();
        if ($Request->getMethod() == 'POST') {
            $nom = $Request->get('nom');
            $prenom = $Request->get('prenom');
            $sujet = $Request->get('sujet');
            $texte= $Request->get('texte');
            $dateReclamation= $Request->get('dateReclamation');
              $rec->setNom($nom);
              $rec->setPrenom($prenom);
              $rec->setSujet($sujet);
              $rec->setTexte($texte);
              $rec->setDateReclamation(new \DateTime($dateReclamation));
              
           $em = $this->getDoctrine()->getManager();
           
            $em->persist($rec);

            $em->flush(); 
        
   }
    return $this->render("EspritDarkomBundle:Default:ajoutReclamation.html.twig");
        }
        
        
         public function listReclamationAction() {
        $em = $this->getDoctrine()->getManager();

        $rec = $em->getRepository('EspritDarkomBundle:Reclamation')->findAll();
        $Request = $this->get('request');
        $search = $Request->get('search');

        if ($Request->getMethod() == "POST") {
            $qb = $em->createQueryBuilder();

            $qb->select('a')
                    ->from('EspritDarkomBundle:Reclamation', 'a')
                    ->where("a.sujet LIKE :motcle")
                    ->orderBy('a.id', 'ASC')
                    ->setParameter('motcle', '%' . $search . '%');

            $query = $qb->getQuery();
            $rec = $query->getResult();
        }

        return $this->render("EspritDarkomBundle:Default:listReclamation.html.twig", array('reclamations' => $rec));
    }
    
    public function deleteReclamationAction($id) {//echo $id; exit();
        //Créer une instance de l'EntityManager
        $em = $this->getDoctrine()->getEntityManager();

        $rec = $em->getRepository('EspritDarkomBundle:Reclamation')->find($id);

        $em->remove($rec);
        $em->flush();

        return $this->redirect($this->generateUrl('list_reclamation'));
    }
}
