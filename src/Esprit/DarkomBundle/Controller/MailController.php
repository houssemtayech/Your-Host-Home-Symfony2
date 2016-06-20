<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\DarkomBundle\Controller;

use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Esprit\DarkomBundle\Entity\Mail;
use Esprit\DarkomBundle\Form\MailType;

/**
 * Description of MailController
 *
 * @author Chams Eddine
 */
class MailController extends Controller {

    public function indexAction() {
        return $this->render('EspritDarkomBundle:Default:mail.html.twig', array());
    }

    public function sendMailAction() {
        $to = "admdarkom@gmail.com";
        $request = $this->get('request');
        $mail = new Mail();
//        $form = $this->createForm(new MailType(), $mail);
//        $request = $this->get('request');
        if($request->getMethod()=='POST'){
        $mail->setFrom($request->get("from"));
        $mail->setNom($request->get("nom"));
       $mail->setText($request->get("message"));
//        $form->handleRequest($request);
//        if ($form->isValid()) {
            $message = \Swift_Message::newInstance()
                    ->setSubject($mail->getNom())
                    ->setFrom($mail->getFrom())
                    ->setTo($to)
                    ->setSender($mail->getFrom())
                    ->setBody("From: ".$mail->getNom().
                            "     <".$mail->getFrom().">\n"."\n\n\n contenu:\n\n".$mail->getText());

            $mailer = $this->get('mailer');
            $mailer->send($message);
            return $this->render('EspritDarkomBundle:Default:mail.html.twig', array('to' => $to, 'from' => $mail->getFrom()));
        } return $this->redirect($this->generateUrl('esprit_darkom_mail_form'));
    }

    public function newAction() {
        
        $mail = new Mail();
        $form = $this->createForm(new MailType(), $mail);
        $request = $this->get('request');
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->sendMailAction('admdarkom@gmail.com', $mail->getFrom(), $mail->getName(), $mail->getText());
        } return $this->render('EspritDarkomBundle:Default:email.html.twig', array('form' => $form->createView()));
    }

}
