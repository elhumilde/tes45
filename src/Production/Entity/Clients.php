<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients")
 * @ORM\Entity
 */
class Clients
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
     * @ORM\Column(name="client", type="string", length=100, nullable=true)
     */
    private $client;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="BonCommande", mappedBy="customer")
     */
    private $commande;


    /**
     * @var string
     *
     * @ORM\Column(name="code_firme", type="string", length=50, nullable=true)
     */
    private $codeFirme;

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
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @param string $client
     */
    public function setClient($client)
    {
        $this->client = $client;
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


}
