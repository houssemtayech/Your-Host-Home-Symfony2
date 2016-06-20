<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\DarkomBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * Description of UserRepository
 *
 * @author Houssem
 */
class UserRepository extends EntityRepository{
    public function  findByStatus($statut){
        $query=$this->getEntityManager()
                ->createQuery("SELECT n from EspritDarkomBundle:User n WHERE n.status=:statut");
        return $query->getResult();
    }
}
