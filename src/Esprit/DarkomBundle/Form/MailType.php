<?php

namespace Esprit\DarkomBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MailType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('nom', 'text')
                ->add('from', 'email')
                ->add('Subject', 'text')
                ->add('text', 'textarea')
                ->add('SEND', 'submit');
    }

    public function getName() {
        return 'Mail';
    }

}
