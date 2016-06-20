<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Esprit\DarkomBundle\Entity;

/**
 * Description of OffreRepository
 *
 * @author Houssem
 */
class OffreRepository {
       public function  findByPublication($publication){
      $query=$this->getEntityManager()
      ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE n.publication=:publication ");
      return $query->getResult();
      }
     
    public function findBy($datedebut, $datefin,$prix,$localite) {

        
        
         $query = $this->getEntityManager()
                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.datedebut:=datedebut and o.datefin=:datefin and o.localite=:localite and o.prix:=prix");

         
        return $query->getResult();
    }
    
//     public function findBy($localite, $datedebut, $datefin,$prix) {
//
//
//        $query = $this->getEntityManager()
//                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.datedebut:=datedebut and o.datefin=:datefin and o.localite=:localite and o.prix:=prix");
//
//
//        return $query->getResult();
//    }

    public function findByLocalite($localite) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.localite=:localite");
        return $query->getResult();
    }
      public function findByPrix($prix) {
        $query = $this->getEntityManager()
                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.prix=:prix");
        return $query->getResult();
    }

}
