<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Offre2Repository
 *
 * @author pc
 */
use Esprit\DarkomBundle\Entity\Offre2;
use Doctrine\ORM\EntityRepository;


class Offre2Repository extends EntityRepository {

    public function findBy($localite, $datedebut, $datefin,$prix) {


        $query = $this->getEntityManager()
                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.datedebut:=datedebut and o.datefin=:datefin and o.localite=:localite and o.prix:=prix");


        return $query->getResult();
    }

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
//    public function findBy($localite, $prix)
//{
//  $query = $this->getEntityManager()
//                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.localite=:localite and o.prix=:prix");
//        return $query->getResult();
//}
    
//      public function recherche($localite, $prix) //$input est la valeur entrée dans l'input type text recherche
//    {
//        $qb = $this ->createQueryBuilder('e')
//                    ->where('e.localite LIKE :localite AND e.prix LIKE :prix ')
//                    ->setParameters(array('localite' => "%".$localite."%"))
//                    ->setParameters(array('prix' => "%".$prix."%"));
//                    
// 
//        //on retourne le résultat
//        return $qb->getQuery()->getResult();
//    }
//    
//  public function findById($id) {
//        $query = $this->getEntityManager()
//                ->createQuery("SELECT o from EspritDarkomBundle:Offre o WHERE o.id=:id");
//        return $query->getResult();
//    }

}
