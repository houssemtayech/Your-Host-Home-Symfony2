<?php

namespace Esprit\DarkomBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function ClientAction()
    {
        return $this->render('EspritDarkomBundle:Default:Client.html.twig');
    }
    public function AnnonceurAction()
    {
        return $this->render('EspritDarkomBundle:Default:Annonceur.html.twig');
    }
     public function AdminAction()
    {
        return $this->render('EspritDarkomBundle:Default:Admin.html.twig');
    }
    public function updateClientAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $user = $em->getRepository('EspritUserBundle:FosUser')->findById($id);
        $form = $this->createformBuilder($user)->add('username', 'text')
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
                return $this->render('EspritDarkomBundle:Default:Client.html.twig', array('msg' => 'Mise à jour affectuée avec succès'));
            }
        } 
    }
}
