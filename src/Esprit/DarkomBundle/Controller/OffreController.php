<?php

namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\DarkomBundle\Entity\Offre;
use Esprit\DarkomBundle\Entity\Offre2;
use Esprit\DarkomBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
//use Esprit\DarkomBundle\Form\Form;
use Esprit\DarkomBundle\Form\AjoutEvtForm;
use Esprit\DarkomBundle\Form\EvenementForm;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OffreController
 *
 * @author pc
 */
class OffreController extends Controller {
 public function rechercheOffreAction() {
        $request = $this->getRequest();
        if ($request->getMethod() == 'POST') {

            if ($s = $request->get('localite') != null) {
                $s = $request->get('localite');
            } else {
                $s = null;
            }
            if ($p = $request->get('prix') != null) {
                $p = $request->get('prix');
            } else {
                $p = null;
            }
            $a = $request->get('datedebut');
            if ($a != null) {
                $datedebut = \DateTime::createFromFormat("Y-m-d", $a);
            } else {
                $datedebut = null;
            }

            $d = $request->get('datefin');
            if ($d != null) {
                $datefin = \DateTime::createFromFormat("Y-m-d", $d);
            } else {
                $datefin = null;
            }

            $em = $this->getDoctrine()->getManager();
            if (($request->get('datedebut') == null) && ($request->get('datefin') == null)&& ($request->get('prix') == null)) {
                $offres = $em->getRepository('EspritDarkomBundle:Offre')
                        ->findByLocalite($s);
                return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            } else if (($request->get('datedebut') == null) && ($request->get('datefin') == null)&& ($request->get('localite') == null)) {
                $offres = $em->getRepository('EspritDarkomBundle:Offre')
                        ->findByPrix($p);
                return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            } 
            
            else if (($request->get('localite') == null)&&($request->get('prix') == null)) {
                $offres = $em->getRepository("EspritDarkomBundle:Offre")
                        ->findBy(array(
                    'datedebut' => $datedebut,
                    'datefin' => $datefin
                           
                ));
                return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            }
            else if ($request->get('localite') == null) {
                $offres = $em->getRepository("EspritDarkomBundle:Offre")
                        ->findBy(array(
                    'datedebut' => $datedebut,
                    'datefin' => $datefin,
                    'prix'=>$p        
                ));
                return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            }
            
            else if ($request->get('prix') == null) {
                $offres = $em->getRepository("EspritDarkomBundle:Offre")
                        ->findBy(array(
                    'datedebut' => $datedebut,
                    'datefin' => $datefin,
                    'localite'=>$s        
                ));
                return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            }
            else if (($request->get('datedebut') == null) && ($request->get('datefin') == null)) {
                $offres = $em->getRepository("EspritDarkomBundle:Offre")
                    ->findBy(array(
                        'localite'=>$s,
                     'prix'=>$p 
                ));
                 return ($this->render("EspritDarkomBundle:Default:rechercheOffre.html.twig", array("Offre" => $offres)));
            }  
        }

        $em = $this->container->get('doctrine')->getEntityManager();
        $offres = $em->getRepository('EspritDarkomBundle:Offre')->findAll();
        return $this->render('EspritDarkomBundle:Default:rechercheOffre.html.twig', array('Offre' => $offres));
    }
    //put your code here
public function trouverOffreNonApprouverAction() {
      $em = $this->getDoctrine()->getManager();
      $offres = $em->getRepository("EspritDarkomBundle:Offre")
      ->findByPublication('0');
      return ($this->render("EspritDarkomBundle:Offre:list.html.twig", array("Offre" => $offres)));
      }

      public function accepterAction($id) {

        $em = $this->getDoctrine()->getManager();
        $offre1 = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $offre1->setPublication('1');
        $em->flush();
        $em = $this->getDoctrine()->getManager();
      $offres = $em->getRepository("EspritDarkomBundle:Offre")
      ->findByPublication('0');
      return ($this->render("EspritDarkomBundle:Offre:list.html.twig", array("Offre" => $offres)));
    }

    public function refuserAction($id) {

        $em = $this->getDoctrine()->getManager();
        $offre2 = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $offre2->setPublication('2');
        $em->flush();
        $em = $this->getDoctrine()->getManager();
      $offres = $em->getRepository("EspritDarkomBundle:Offre")
      ->findByPublication('0');
      return ($this->render("EspritDarkomBundle:Offre:list.html.twig", array("Offre" => $offres)));
    }

    public function listeEvenement_orgAction($id) {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('EspritDarkomBundle:Offre')->findBy(array("iduser" => $id));

        return $this->render('EspritDarkomBundle:Default:listeEvenement_org.html.twig', array('offre' => $evenements));
    }

   public function listAction() {

        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('EspritDarkomBundle:Offre')->findAll();
        return $this->render('EspritDarkomBundle:Offre:list.html.twig', array('offre' => $image));
    }
    public function afficheImageAction($id) {
        $em = $this->getDoctrine()->getManager();
        $image = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        return $this->render('EspritDarkomBundle:Offre:list1.html.twig', array('offre' => $image));
    }

    public function photoAction($id) {

        $em = $this->getDoctrine()->getManager();
        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $photo = $image_obj->getPhoto1();

        $response = new StreamedResponse(function () use ($photo) {
            echo stream_get_contents($photo);
        }
        );
        $response->headers->set('Content-Type', 'image/jpeg');
        return $response;
    }

    public function photo1Action($id) {

        $em = $this->getDoctrine()->getManager();
        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $photo = $image_obj->getPhoto2();

        $response = new StreamedResponse(function () use ($photo) {
            echo stream_get_contents($photo);
        }
        );
        $response->headers->set('Content-Type', 'image/jpeg');
        return $response;
    }

    public function photo2Action($id) {

        $em = $this->getDoctrine()->getManager();
        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $photo = $image_obj->getPhoto3();

        $response = new StreamedResponse(function () use ($photo) {
            echo stream_get_contents($photo);
        }
        );
        $response->headers->set('Content-Type', 'image/jpeg');
        return $response;
    }


    public function supprimerAction($id) {
         
        $em = $this->container->get('doctrine')->getEntityManager();
        $evenement = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
        $em->remove($evenement);
        $em->flush();
         // return new Response("suppression avec succès");
        return $this->render('EspritDarkomBundle:Default:Annonceur.html.twig', array('offre' => $evenement));





    }

   public function ajouterEvtAction($id)
    { 
         $im=new Offre();
         //$form = $this-> createForm(new AjoutEvtForm(), $im);
          $form = $this->createForm(new AjoutEvtForm(), $im);
     $request = $this->get('request');
       $form->handleRequest($request) ;
       if ($form->isValid()) { 
           $em = $this->getDoctrine()->getManager();
       
           $file = $im->getPhoto1();
           $file2 = $im->getPhoto2();
                 $file3 = $im->getPhoto3();
        
          $im->setPhoto1($file);
            $im->setPhoto2($file2);
            $im->setPhoto3($file3);
               $im->setIduser($id);
              $im->setPublication('0');
            $em->persist($im); 
           $em->flush();
         
       }
      
      return $this->render('EspritDarkomBundle:Default:Ajouter_evt_org.html.twig', array('Form'=>$form->createView()));
        }


    public function updateEvtAction($id) {
       
       $em=  $this->get('doctrine')->getEntityManager();
       $offres=$em->getRepository('EspritDarkomBundle:Offre')->find($id); 
       $form=  $this->createForm(new EvenementForm(),$offres);
       $request=$this->getRequest();
       if($form->handleRequest($request)->isValid())                           //vérifier le formulaire
        {
         $em=$this->getDoctrine()->getManager();
         
         $off=$form->getData();
         $em->persist($off);
         $em->flush();
           
         
        
        }
     
        return $this->render('EspritDarkomBundle:Default:Update_evt.html.twig', array('Form' => $form->createView()));
    }
//         public function photoAction($idEvt) 
//            { $em = $this->getDoctrine()->getManager();
//            $evenements = $em->getRepository('EspritDarkomBundle:Offre')->find($idEvt);
//            $photo=$evenements->getPhoto1();
//            $response = new StreamedResponse(function () use ($photo) { echo stream_get_contents($photo); });
//           // le content type à fixer selon l’extension de l’image 
//          $response->headers->set('Content-Type', 'photo/jpg'); 
//            return $response; 
//            
//    }

//    public function afficheImageAction($id) {
//        $em = $this->getDoctrine()->getManager();
//        $image = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
//        return $this->render('EspritDarkomBundle:Offre:list1.html.twig', array('offre' => $image));
//    }
//
//    public function photoAction($id) {
//
//        $em = $this->getDoctrine()->getManager();
//        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
//        $photo = $image_obj->getPhoto1();
//
//        $response = new StreamedResponse(function () use ($photo) {
//            echo stream_get_contents($photo);
//        }
//        );
//        $response->headers->set('Content-Type', 'image/jpeg');
//        return $response;
//    }
//
//    public function photo1Action($id) {
//
//        $em = $this->getDoctrine()->getManager();
//        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
//        $photo = $image_obj->getPhoto2();
//
//        $response = new StreamedResponse(function () use ($photo) {
//            echo stream_get_contents($photo);
//        }
//        );
//        $response->headers->set('Content-Type', 'image/jpeg');
//        return $response;
//    }
//
//    public function photo2Action($id) {
//
//        $em = $this->getDoctrine()->getManager();
//        $image_obj = $em->getRepository('EspritDarkomBundle:Offre')->find($id);
//        $photo = $image_obj->getPhoto3();
//
//        $response = new StreamedResponse(function () use ($photo) {
//            echo stream_get_contents($photo);
//        }
//        );
//        $response->headers->set('Content-Type', 'image/jpeg');
//        return $response;
//    }

      public function listedetails_orgAction($id) {
        $em = $this->getDoctrine()->getManager();

        $evenements = $em->getRepository('EspritDarkomBundle:Offre')->findBy(array("id" => $id));
        $em = $this->getDoctrine()->getManager();

        $commentaire = $em->getRepository('EspritDarkomBundle:Note')->findBy(array('idoffre'=>$id),null,null,null);

        return $this->render('EspritFrontBundle:OffreDetails:OffreDetails.html.twig', array('offre' => $evenements,
            'comm'=>$commentaire));
    }
   
    
    

    
}

