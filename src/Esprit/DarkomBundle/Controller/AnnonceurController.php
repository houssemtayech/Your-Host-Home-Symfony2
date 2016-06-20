<?php
namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnonceurController extends Controller
{
      public function updateAction($id) {

        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('EspritUserBundle:User')->find($id);
        $form = $this->createformBuilder($user)
              
               
            ->add('nom')  
            ->add('prenom')
            ->add('email', 'email', array('label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))
            ->add('Telephone') 
            ->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))    
            
                ->getForm();
//assigner les données saisies par l'user à l'objet modele 
         $request = $this->getRequest();
        if ($request->getMethod() == "POST") {
            $form->bind($request);
            if ($form->isValid()) {
                $em = $this->container->get('Doctrine')->getEntityManager();
                $em->persist($user);
                $em->flush();
                return $this->render('EspritDarkomBundle:Default:Annonceur.html.twig', array('message'=> 'c est bon'));
            }
        } return $this->render('EspritDarkomBundle:Default:modifierAnnonceur.html.twig', array('Form' => $form->createView()));
    }
}

