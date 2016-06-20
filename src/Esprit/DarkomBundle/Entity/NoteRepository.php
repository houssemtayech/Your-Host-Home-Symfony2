<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\DarkomBundle\Entity;
use Doctrine\ORM\EntityRepository;

/**
 * Description of NoteRepository
 *
 * @author Houssem
 */
class NoteRepository extends EntityRepository {
    public function  findByStatut($statut){
        $query=$this->getEntityManager()
                ->createQuery("SELECT n from EspritDarkomBundle:Note n WHERE n.statut=:statut");
        return $query->getResult();
    }
}
