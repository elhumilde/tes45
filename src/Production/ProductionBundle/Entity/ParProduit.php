<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParProduit
 *
 * @ORM\Table(name="par_produit")
 * @ORM\Entity
 */
class ParProduit
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
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="Workflow", inversedBy="cart")
     * @ORM\JoinColumn(name="id_workflow", referencedColumnName="id")
     */
    private $customer;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="BonCommandeLigne", mappedBy="produit")
     */
    private $ligne;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workflow", type="integer", nullable=true)
     */
    private $idWorkflow;

    /**
     * @var string
     *
     * @ORM\Column(name="code_produit", type="string", length=50, nullable=false)
     */
    private $codeProduit;

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
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return int
     */
    public function getIdWorkflow()
    {
        return $this->idWorkflow;
    }

    /**
     * @param int $idWorkflow
     */
    public function setIdWorkflow($idWorkflow)
    {
        $this->idWorkflow = $idWorkflow;
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
