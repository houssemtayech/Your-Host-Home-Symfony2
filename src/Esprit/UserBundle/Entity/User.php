<?php


namespace Esprit\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     *
     * @ORM\Column(type="integer")
     * 
     */
    Private $telephone;
    /**
     *
     * @ORM\Column(type="string")
     * 
     */
    private $nom;
    /**
     *
     * @ORM\Column(type="string")
     * 
     */
    private $prenom;
    
    function getTelephone() {
        return $this->telephone;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

        public function __construct()
    {
        parent::__construct();
        // your own logic
    }
     public function getParent()
 {
 return 'FOSUserBundle';
 }
}