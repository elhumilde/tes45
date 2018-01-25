<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WorkflowEtape
 *
 * @ORM\Table(name="workflow_etape")
 * @ORM\Entity
 */
class WorkflowEtape
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
     * @ORM\OneToOne(targetEntity="Workflow", inversedBy="carts")
     * @ORM\JoinColumn(name="id_workflow", referencedColumnName="id")
     */
    private $customer;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="AffectationEtapeUtilisateur", mappedBy="etape")
     */
    private $ligneEtape;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=true)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_workflow", type="integer", nullable=true)
     */
    private $idWorkflow;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_etape_precedente", type="integer", nullable=true)
     */
    private $idEtapePrecedente;

    /**
     * @var string
     *
     * @ORM\Column(name="temps_prevu", type="string", length=50, nullable=true)
     */
    private $tempsPrevu;

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
     * @return int
     */
    public function getIdEtapePrecedente()
    {
        return $this->idEtapePrecedente;
    }

    /**
     * @param int $idEtapePrecedente
     */
    public function setIdEtapePrecedente($idEtapePrecedente)
    {
        $this->idEtapePrecedente = $idEtapePrecedente;
    }

    /**
     * @return string
     */
    public function getTempsPrevu()
    {
        return $this->tempsPrevu;
    }

    /**
     * @param string $tempsPrevu
     */
    public function setTempsPrevu($tempsPrevu)
    {
        $this->tempsPrevu = $tempsPrevu;
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
    public function getLigneEtape()
    {
        return $this->ligneEtape;
    }

    /**
     * @param mixed $ligneEtape
     */
    public function setLigneEtape($ligneEtape)
    {
        $this->ligneEtape = $ligneEtape;
    }



}
