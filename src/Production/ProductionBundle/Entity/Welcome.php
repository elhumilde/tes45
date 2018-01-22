<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Welcome
 *
 * @ORM\Table(name="welcome")
 * @ORM\Entity
 */
class Welcome
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
     * @var \DateTime
     *
     * @ORM\Column(name="date_trait", type="datetime", nullable=true)
     */
    private $dateTrait;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reunion", type="datetime", nullable=true)
     */

    private $dateReunion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_mise", type="datetime", nullable=true)
     */
    private $dateMise;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=true)
     */
    private $idCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="cmt", type="text", nullable=true)
     */
    private $commentaire;


    /**
     * One Cart has One Customer.
     * @ORM\OneToOne(targetEntity="BonCommande", inversedBy="welcomes")
     * @ORM\JoinColumn(name="id_commande", referencedColumnName="id")
     */
    private $commanderev;

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
     * @return \DateTime
     */
    public function getDateTrait()
    {
        return $this->dateTrait;
    }

    /**
     * @param \DateTime $dateTrait
     */
    public function setDateTrait($dateTrait)
    {
        $this->dateTrait = $dateTrait;
    }

    /**
     * @return \DateTime
     */
    public function getDateReunion()
    {
        return $this->dateReunion;
    }

    /**
     * @param \DateTime $dateReunion
     */
    public function setDateReunion($dateReunion)
    {
        $this->dateReunion = $dateReunion;
    }

    /**
     * @return \DateTime
     */
    public function getDateMise()
    {
        return $this->dateMise;
    }

    /**
     * @param \DateTime $dateMise
     */
    public function setDateMise($dateMise)
    {
        $this->dateMise = $dateMise;
    }

    /**
     * @return int
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
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
     * @return mixed
     */
    public function getCommanderev()
    {
        return $this->commanderev;
    }

    /**
     * @param mixed $commanderev
     */
    public function setCommanderev($commanderev)
    {
        $this->commanderev = $commanderev;
    }


}
