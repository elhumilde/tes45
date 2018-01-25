<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AffectationEtapeUtilisateur
 *
 * @ORM\Table(name="affectation_etape_utilisateur")
 * @ORM\Entity(repositoryClass="Production\ProductionBundle\Entity\AffectationEtapeUtilisateurRepository")
 */
class AffectationEtapeUtilisateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_user", type="integer", nullable=true)
     */
    private $idUser;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etape", type="integer", nullable=true)
     */
    private $idEtape;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_ligne_bc", type="integer", nullable=true)
     */
    private $idLigneBc;

    /**
     * @var integer
     *
     * @ORM\Column(name="affecter", type="integer", nullable=true)
     */
    private $affecter;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_affectation", type="datetime", nullable=true)
     */
    private $dateAffectation;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="WorkflowEtape", inversedBy="ligneEtape")
     * @ORM\JoinColumn(name="id_etape", referencedColumnName="id")
     */
    private $etape;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="WorkflowExecution", mappedBy="etexuc")
     */
    private $exucEtape;


    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="BonCommandeLigne", inversedBy="ligneCommande")
     * @ORM\JoinColumn(name="id_ligne_bc", referencedColumnName="id")
     */
    private $bncommande;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="Production\UserBundle\Entity\User", inversedBy="etapeUtilisateur")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="id")
     */
    private $utilisateur;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;
    }

    /**
     * @return int
     */
    public function getIdEtape()
    {
        return $this->idEtape;
    }

    /**
     * @param int $idEtape
     */
    public function setIdEtape($idEtape)
    {
        $this->idEtape = $idEtape;
    }

    /**
     * @return int
     */
    public function getIdLigneBc()
    {
        return $this->idLigneBc;
    }

    /**
     * @param int $idLigneBc
     */
    public function setIdLigneBc($idLigneBc)
    {
        $this->idLigneBc = $idLigneBc;
    }

    /**
     * @return mixed
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * @param mixed $etape
     */
    public function setEtape($etape)
    {
        $this->etape = $etape;
    }

    /**
     * @return mixed
     */
    public function getBncommande()
    {
        return $this->bncommande;
    }

    /**
     * @param mixed $bncommande
     */
    public function setBncommande($bncommande)
    {
        $this->bncommande = $bncommande;
    }

    /**
     * @return mixed
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * @param mixed $utilisateur
     */
    public function setUtilisateur($utilisateur)
    {
        $this->utilisateur = $utilisateur;
    }

    /**
     * @return \DateTime
     */
    public function getDateAffectation()
    {
        return $this->dateAffectation;
    }

    /**
     * @param \DateTime $dateAffectation
     */
    public function setDateAffectation($dateAffectation)
    {
        $this->dateAffectation = $dateAffectation;
    }

    /**
     * @return int
     */
    public function getAffecter()
    {
        return $this->affecter;
    }

    /**
     * @param int $affecter
     */
    public function setAffecter($affecter)
    {
        $this->affecter = $affecter;
    }

    /**
     * @return mixed
     */
    public function getExucEtape()
    {
        return $this->exucEtape;
    }

    /**
     * @param mixed $exucEtape
     */
    public function setExucEtape($exucEtape)
    {
        $this->exucEtape = $exucEtape;
    }




}
