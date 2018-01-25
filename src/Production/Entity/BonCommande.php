<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonCommande
 *
 * @ORM\Table(name="bon_commande")
 * @ORM\Entity
 */
class BonCommande
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
     * @var string
     *
     * @ORM\Column(name="num_bc", type="string", length=50, nullable=false)
     */
    private $numBc;

    /**
     * @var string
     *
     * @ORM\Column(name="code_firme", type="string", length=10, nullable=true)
     */
    private $codeFirme;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="Clients", inversedBy="commande")
     * @ORM\JoinColumn(name="id_client", referencedColumnName="id")
     */
    private $customer;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="Vendeur", inversedBy="commandev")
     * @ORM\JoinColumn(name="code_vendeur", referencedColumnName="id")
     */
    private $vendeur;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="BonCommandeLigne", mappedBy="commande")
     */
    private $ligne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_bc", type="date", nullable=true)
     */
    private $dateBc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_prevue_reunion_client", type="date", nullable=true)
     */
    private $datePrevueReunionClient;

    /**
     * @var string
     *
     * @ORM\Column(name="code_vendeur", type="string", length=50, nullable=true)
     */
    private $codeVendeur;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $montantHt;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_ttc", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $montantTtc;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=true)
     */
    private $idClient;

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
     * @return string
     */
    public function getNumBc()
    {
        return $this->numBc;
    }

    /**
     * @param string $numBc
     */
    public function setNumBc($numBc)
    {
        $this->numBc = $numBc;
    }

    /**
     * @return string
     */
    public function getCodeFirme()
    {
        return $this->codeFirme;
    }

    /**
     * @param string $codeFirme
     */
    public function setCodeFirme($codeFirme)
    {
        $this->codeFirme = $codeFirme;
    }

    /**
     * @return \DateTime
     */
    public function getDateBc()
    {
        return $this->dateBc;
    }

    /**
     * @param \DateTime $dateBc
     */
    public function setDateBc($dateBc)
    {
        $this->dateBc = $dateBc;
    }

    /**
     * @return \DateTime
     */
    public function getDatePrevueReunionClient()
    {
        return $this->datePrevueReunionClient;
    }

    /**
     * @param \DateTime $datePrevueReunionClient
     */
    public function setDatePrevueReunionClient($datePrevueReunionClient)
    {
        $this->datePrevueReunionClient = $datePrevueReunionClient;
    }

    /**
     * @return string
     */
    public function getCodeVendeur()
    {
        return $this->codeVendeur;
    }

    /**
     * @param string $codeVendeur
     */
    public function setCodeVendeur($codeVendeur)
    {
        $this->codeVendeur = $codeVendeur;
    }

    /**
     * @return string
     */
    public function getMontantHt()
    {
        return $this->montantHt;
    }

    /**
     * @param string $montantHt
     */
    public function setMontantHt($montantHt)
    {
        $this->montantHt = $montantHt;
    }

    /**
     * @return string
     */
    public function getMontantTtc()
    {
        return $this->montantTtc;
    }

    /**
     * @param string $montantTtc
     */
    public function setMontantTtc($montantTtc)
    {
        $this->montantTtc = $montantTtc;
    }

    /**
     * @return int
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
    }

    /**
     * @return mixed
     */
    public function getVendeur()
    {
        return $this->vendeur;
    }

    /**
     * @param mixed $vendeur
     */
    public function setVendeur($vendeur)
    {
        $this->vendeur = $vendeur;
    }

    /**
     * @return mixed
     */
    public function getLigne()
    {
        return $this->ligne;
    }

    /**
     * @param mixed $ligne
     */
    public function setLigne($ligne)
    {
        $this->ligne = $ligne;
    }




}
