<?php

namespace Esprit\FrontBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class CommentaireForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('commentaire');
                }

    public function getName() {
        return 'commentaire';
    }

}