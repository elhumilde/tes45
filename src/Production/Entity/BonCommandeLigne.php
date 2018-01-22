<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonCommandeLigne
 *
 * @ORM\Table(name="bon_commande_ligne")
 * @ORM\Entity
 */
class BonCommandeLigne
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
     * @ORM\Column(name="num_bc", type="string", length=50, nullable=true)
     */
    private $numBc;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="BonCommande", inversedBy="ligne")
     * @ORM\JoinColumn(name="num_bc", referencedColumnName="id")
     */
    private $commande;

    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="ParProduit", inversedBy="ligne")
     * @ORM\JoinColumn(name="code_produit", referencedColumnName="id")
     */
    private $produit;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="AffectationEtapeUtilisateur", mappedBy="bncommande")
     */
    private $ligneCommande;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="Oneligne", mappedBy="ligneProduit")
     */
    private $ligneone;


    /**
     * @var string
     *
     * @ORM\Column(name="code_produit", type="string", length=50, nullable=true)
     */
    private $codeProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="affecter", type="string", length=50, nullable=true)
     */
    private $affecter;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_ht", type="decimal", precision=18, scale=2, nullable=true)
     */
    private $montantHt;

    /**
     * @var integer
     *
     * @ORM\Column(name="cloturee", type="integer", nullable=true)
     */
    private $cloturee;

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
    public function getCodeProduit()
    {
        return $this->codeProduit;
    }

    /**
     * @param string $codeProduit
     */
    public function setCodeProduit($codeProduit)
    {
        $this->codeProduit = $codeProduit;
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
     * @return int
     */
    public function getCloturee()
    {
        return $this->cloturee;
    }

    /**
     * @param int $cloturee
     */
    public function setCloturee($cloturee)
    {
        $this->cloturee = $cloturee;
    }

    /**
     * @return mixed
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * @param mixed $commande
     */
    public function setCommande($commande)
    {
        $this->commande = $commande;
    }

    /**
     * @return mixed
     */
    public function getProduit()
    {
        return $this->produit;
    }

    /**
     * @param mixed $produit
     */
    public function setProduit($produit)
    {
        $this->produit = $produit;
    }

    /**
     * @return mixed
     */
    public function getLigneCommande()
    {
        return $this->ligneCommande;
    }

    /**
     * @param mixed $ligneCommande
     */
    public function setLigneCommande($ligneCommande)
    {
        $this->ligneCommande = $ligneCommande;
    }

    /**
     * @return string
     */
    public function getAffecter()
    {
        return $this->affecter;
    }

    /**
     * @param string $affecter
     */
    public function setAffecter($affecter)
    {
        $this->affecter = $affecter;
    }

    /**
     * @return mixed
     */
    public function getLigneone()
    {
        return $this->ligneone;
    }

    /**
     * @param mixed $ligneone
     */
    public function setLigneone($ligneone)
    {
        $this->ligneone = $ligneone;
    }


}
