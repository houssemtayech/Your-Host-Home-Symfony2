<?php

namespace Esprit\DarkomBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class EvenementForm extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titre')
                ->add('prix')
               
                ->add('localite')
                ->add('gouvernorat', 'choice', array('choices' => array('Ariana' => 'Ariana', 'Bizerte' => 'Bizerte', 'Beja' => 'Beja', 'tunis' => 'tunis', 'Kairaouan' => 'Kairouan', 'Siliana' => 'Siliana', 'BenArous' => 'BenArous', 'Gabes' => 'Gabes', 'Gafas' => 'Gafsa')))
                ->add('delegation', 'choice', array('choices' => array('Ariana' => 'Ariana', 'Bizerte' => 'Bizerte', 'Beja' => 'Beja', 'tunis' => 'tunis', 'Kairaouan' => 'Kairouan', 'Siliana' => 'Siliana', 'BenArous' => 'BenArous', 'Gabes' => 'Gabes', 'Gafas' => 'Gafsa')))
                ->add('description')
                ->add('codepostal')
                ->add('nbrepiece', 'choice', array('choices' => array('1' => '1', '2' => '2', '3' => '3', '4' => '4')))
               ->add('datedebut')
                ->add('datefin')
                ->add('superficie')
                ->add('type', 'choice', array('choices' => array('m' => 'chambre', 'c' => 'maison')));
//                ->add('photo1', 'file')
//                ->add('photo2', 'file')
//                ->add('photo3', 'file');
    }

    public function getName() {
        return 'Evenement';
    }

}
