<?php

namespace Esprit\DarkomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="Reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     
     * @ORM\Column(name="nom", type="string", nullable=false)
     */
    private $nom;

    /**
     
     * @ORM\Column(name="prenom", type="string", nullable=false)
     */
    private $prenom;

    /**
     
     * @ORM\Column(name="sujet", type="string", nullable=false)
     */
    private $sujet;

    /**
     
     * @ORM\Column(name="texte", type="string", nullable=false)
     */
    private $texte;
    /**
     
     * @ORM\Column(name="dateReclamation", type="date", nullable=false)
     */
    private $dateReclamation;
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSujet() {
        return $this->sujet;
    }

    function getTexte() {
        return $this->texte;
    }

    function getDateReclamation() {
        return $this->dateReclamation;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setSujet($sujet) {
        $this->sujet = $sujet;
    }

    function setTexte($texte) {
        $this->texte = $texte;
    }

    function setDateReclamation($dateReclamation) {
        $this->dateReclamation = $dateReclamation;
    }


}
