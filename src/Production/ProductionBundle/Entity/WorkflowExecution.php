<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkflowExecution
 *
 * @ORM\Table(name="workflow_execution")
 * @ORM\Entity
 */
class WorkflowExecution
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
     * @ORM\Column(name="id_ligne_bc", type="integer", nullable=true)
     */
    private $idLigneBc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etape", type="integer", nullable=true)
     */
    private $idEtape;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="fin", type="integer", nullable=true)
     */
    private $fin;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="datetime", nullable=true)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="datetime", nullable=true)
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=500, nullable=true)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="url_pj", type="string", length=50, nullable=true)
     */
    private $urlPj;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_utilisateur", type="integer", nullable=true)
     */
    private $idUtilisateur;



    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="AffectationEtapeUtilisateur", inversedBy="exucEtape")
     * @ORM\JoinColumn(name="id_etape", referencedColumnName="id")
     */
    private $etexuc;


    /**
     * One Customer has One Cart.
     * @ORM\OneToMany(targetEntity="ExecutionEtapeDetail", mappedBy="details")
     */
    private $detailsEx;



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
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * @param \DateTime $dateDebut
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    }

    /**
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * @param \DateTime $dateFin
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    /**
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * @param string $commentaire
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return string
     */
    public function getUrlPj()
    {
        return $this->urlPj;
    }

    /**
     * @param string $urlPj
     */
    public function setUrlPj($urlPj)
    {
        $this->urlPj = $urlPj;
    }

    /**
     * @return int
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * @param int $idUtilisateur
     */
    public function setIdUtilisateur($idUtilisateur)
    {
        $this->idUtilisateur = $idUtilisateur;
    }

    /**
     * @return mixed
     */
    public function getEtexuc()
    {
        return $this->etexuc;
    }

    /**
     * @param mixed $etexuc
     */
    public function setEtexuc($etexuc)
    {
        $this->etexuc = $etexuc;
    }

    /**
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * @param int $etat
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * @return mixed
     */
    public function getDetailsEx()
    {
        return $this->detailsEx;
    }

    /**
     * @param mixed $detailsEx
     */
    public function setDetailsEx($detailsEx)
    {
        $this->detailsEx = $detailsEx;
    }

    /**
     * @return int
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * @param int $fin
     */
    public function setFin($fin)
    {
        $this->fin = $fin;
    }




}
