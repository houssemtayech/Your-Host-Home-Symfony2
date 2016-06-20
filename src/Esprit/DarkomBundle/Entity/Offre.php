<?php

namespace Esprit\DarkomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Esprit\DarkomBundle\Entity\AbstractGMapEntity;
/**
 * Offre
 *
 * @ORM\Table(name="offre")
 * @ORM\Entity
 */
class Offre 
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
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=20, nullable=false)
     */
    private $titre;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer", nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrepiece", type="integer", nullable=false)
     */
    private $nbrepiece;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datedebut", type="date", nullable=true)
     */
    private $datedebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datefin", type="date", nullable=true)
     */
    private $datefin;

    /**
     * @var float
     *
     * @ORM\Column(name="superficie", type="float", precision=10, scale=0, nullable=false)
     */
    private $superficie;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float", precision=10, scale=0, nullable=false)
     */
    private $prix;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="gouvernorat", type="string", length=20, nullable=false)
     */
    private $gouvernorat;

    /**
     * @var string
     *
     * @ORM\Column(name="delegation", type="string", length=20, nullable=false)
     */
    private $delegation;

    /**
     * @var string
     *
     * @ORM\Column(name="localite", type="string", length=20, nullable=false)
     */
    private $localite;

    /**
     * @var integer
     *
     * @ORM\Column(name="codepostal", type="integer", nullable=false)
     */
    private $codepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="photo1", type="blob", nullable=false)
     */
    private $photo1;

    /**
     * @var string
     *
     * @ORM\Column(name="photo2", type="blob", nullable=true)
     */
    private $photo2;

    /**
     * @var string
     *
     * @ORM\Column(name="photo3", type="blob", nullable=true)
     */
    private $photo3;

    /**
     * @var boolean
     *
     * @ORM\Column(name="publication", type="boolean", nullable=true)
     */
    private $publication;

    /**
     * @var float
     *
     * @ORM\Column(name="notemoy", type="float", precision=10, scale=0, nullable=true)
     */
    private $notemoy;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer", nullable=false)
     */
    private $iduser;

    function getId() {
        return $this->id;
    }

    function getTitre() {
        return $this->titre;
    }

    function getType() {
        return $this->type;
    }

    function getNbrepiece() {
        return $this->nbrepiece;
    }

    function getDatedebut() {
        return $this->datedebut;
    }

    function getDatefin() {
        return $this->datefin;
    }

    function getSuperficie() {
        return $this->superficie;
    }

    function getPrix() {
        return $this->prix;
    }

    function getDescription() {
        return $this->description;
    }

    function getGouvernorat() {
        return $this->gouvernorat;
    }

    function getDelegation() {
        return $this->delegation;
    }

    function getLocalite() {
        return $this->localite;
    }

    function getCodepostal() {
        return $this->codepostal;
    }

    function getPhoto1() {
        return $this->photo1;
    }

    function getPhoto2() {
        return $this->photo2;
    }

    function getPhoto3() {
        return $this->photo3;
    }

    function getPublication() {
        return $this->publication;
    }

    function getNotemoy() {
        return $this->notemoy;
    }

    function getIduser() {
        return $this->iduser;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setNbrepiece($nbrepiece) {
        $this->nbrepiece = $nbrepiece;
    }

    function setDatedebut(\DateTime $datedebut) {
        $this->datedebut = $datedebut;
    }

    function setDatefin(\DateTime $datefin) {
        $this->datefin = $datefin;
    }

    function setSuperficie($superficie) {
        $this->superficie = $superficie;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setGouvernorat($gouvernorat) {
        $this->gouvernorat = $gouvernorat;
    }

    function setDelegation($delegation) {
        $this->delegation = $delegation;
    }

    function setLocalite($localite) {
        $this->localite = $localite;
    }

    function setCodepostal($codepostal) {
        $this->codepostal = $codepostal;
    }

    function setPhoto1($photo1) {
        $this->photo1 = $photo1;
    }

    function setPhoto2($photo2) {
        $this->photo2 = $photo2;
    }

    function setPhoto3($photo3) {
        $this->photo3 = $photo3;
    }

    function setPublication($publication) {
        $this->publication = $publication;
    }

    function setNotemoy($notemoy) {
        $this->notemoy = $notemoy;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }


}
