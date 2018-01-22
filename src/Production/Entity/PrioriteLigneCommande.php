<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrioriteLigneCommande
 *
 * @ORM\Table(name="priorite_ligne_commande")
 * @ORM\Entity
 */
class PrioriteLigneCommande
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
     * @ORM\Column(name="id_ligne_commande", type="integer", nullable=true)
     */
    private $idLigneCommande;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;

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
    public function getIdLigneCommande()
    {
        return $this->idLigneCommande;
    }

    /**
     * @param int $idLigneCommande
     */
    public function setIdLigneCommande($idLigneCommande)
    {
        $this->idLigneCommande = $idLigneCommande;
    }

    /**
     * @return int
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * @param int $ordre
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    }


}
