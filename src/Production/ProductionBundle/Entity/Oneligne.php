<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Oneligne
 *
 * @ORM\Table(name="one_ligne")
 * @ORM\Entity(repositoryClass="Production\ProductionBundle\Entity\OneligneRepository")
 */
class Oneligne
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="code_ligne", type="integer")
     */
    private $codeLigne;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $dateCreation;


    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="BonCommandeLigne", inversedBy="ligneone")
     * @ORM\JoinColumn(name="code_ligne", referencedColumnName="id")
     */
    private $ligneProduit;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codeLigne
     *
     * @param integer $codeLigne
     * @return Oneligne
     */
    public function setCodeLigne($codeLigne)
    {
        $this->codeLigne = $codeLigne;

        return $this;
    }

    /**
     * Get codeLigne
     *
     * @return integer 
     */
    public function getCodeLigne()
    {
        return $this->codeLigne;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     * @return Oneligne
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime 
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @return mixed
     */
    public function getLigneProduit()
    {
        return $this->ligneProduit;
    }

    /**
     * @param mixed $ligneProduit
     */
    public function setLigneProduit($ligneProduit)
    {
        $this->ligneProduit = $ligneProduit;
    }



}
