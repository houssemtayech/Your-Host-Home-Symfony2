<?php

namespace Esprit\DarkomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="iduser", columns={"idoffre"})})
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note=4;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer", nullable=true)
     */
    private $statut=0;

    /**
     * @var integer
     *
     * @ORM\Column(name="idoffre", type="integer", nullable=false)
     */
    private $idoffre=4;
    function getId() {
        return $this->id;
    }

    function getNote() {
        return $this->note;
    }

    function getCommentaire() {
        return $this->commentaire;
    }

    function getStatut() {
        return $this->statut;
    }

    function getIdoffre() {
        return $this->idoffre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNote($note) {
        $this->note = $note;
    }

    function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function setIdoffre($idoffre) {
        $this->idoffre = $idoffre;
    }



}
