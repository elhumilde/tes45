<?php

namespace Telecontact\telecontactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Liste
 *
 * @ORM\Table(name="liste")
 * @ORM\Entity
 */
class Liste
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
     * @ORM\Column(name="nom", type="string", length=60, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=60, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="fonction", type="string", length=150, nullable=false)
     */
    private $fonction;

    /**
     * @var string
     *
     * @ORM\Column(name="societe", type="string", length=150, nullable=false)
     */
    private $societe;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=false)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=13, nullable=false)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=150, nullable=false)
     */
    private $site;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=150, nullable=false)
     */
    private $message;

    /**
     * @var string
     *
     * @ORM\Column(name="forme", type="string", length=12, nullable=false)
     */
    private $forme;

    /**
     * @var string
     *
     * @ORM\Column(name="rc", type="string", length=100, nullable=false)
     */
    private $rc;

    /**
     * @var string
     *
     * @ORM\Column(name="ice", type="string", length=100, nullable=false)
     */
    private $ice;

    /**
     * @var string
     *
     * @ORM\Column(name="creation", type="string", length=13, nullable=false)
     */
    private $creation;

    /**
     * @var string
     *
     * @ORM\Column(name="effectif", type="string", length=6, nullable=false)
     */
    private $effectif;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=40, nullable=false)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="object", type="string", length=40, nullable=false)
     */
    private $object;

    /**
     * @var string
     *
     * @ORM\Column(name="referencement", type="string", length=50, nullable=false)
     */
    private $referencement;

    /**
     * @var string
     *
     * @ORM\Column(name="affichage", type="string", length=150, nullable=false)
     */
    private $affichage;

    /**
     * @var string
     *
     * @ORM\Column(name="display", type="string", length=80, nullable=false)
     */
    private $display;

    /**
     * @var string
     *
     * @ORM\Column(name="siteconnect", type="string", length=70, nullable=false)
     */
    private $siteconnect;

    /**
     * @var string
     *
     * @ORM\Column(name="MD", type="string", length=150, nullable=false)
     */
    private $md;

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
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getFonction()
    {
        return $this->fonction;
    }

    /**
     * @param string $fonction
     */
    public function setFonction($fonction)
    {
        $this->fonction = $fonction;
    }

    /**
     * @return string
     */
    public function getSociete()
    {
        return $this->societe;
    }

    /**
     * @param string $societe
     */
    public function setSociete($societe)
    {
        $this->societe = $societe;
    }

    /**
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * @param string $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * @param string $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param string $site
     */
    public function setSite($site)
    {
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return string
     */
    public function getForme()
    {
        return $this->forme;
    }

    /**
     * @param string $forme
     */
    public function setForme($forme)
    {
        $this->forme = $forme;
    }

    /**
     * @return string
     */
    public function getRc()
    {
        return $this->rc;
    }

    /**
     * @param string $rc
     */
    public function setRc($rc)
    {
        $this->rc = $rc;
    }

    /**
     * @return string
     */
    public function getIce()
    {
        return $this->ice;
    }

    /**
     * @param string $ice
     */
    public function setIce($ice)
    {
        $this->ice = $ice;
    }

    /**
     * @return string
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * @param string $creation
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    /**
     * @return string
     */
    public function getEffectif()
    {
        return $this->effectif;
    }

    /**
     * @param string $effectif
     */
    public function setEffectif($effectif)
    {
        $this->effectif = $effectif;
    }

    /**
     * @return string
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param string $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param string $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }

    /**
     * @return string
     */
    public function getReferencement()
    {
        return $this->referencement;
    }

    /**
     * @param string $referencement
     */
    public function setReferencement($referencement)
    {
        $this->referencement = $referencement;
    }

    /**
     * @return string
     */
    public function getAffichage()
    {
        return $this->affichage;
    }

    /**
     * @param string $affichage
     */
    public function setAffichage($affichage)
    {
        $this->affichage = $affichage;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param string $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return string
     */
    public function getSiteconnect()
    {
        return $this->siteconnect;
    }

    /**
     * @param string $siteconnect
     */
    public function setSiteconnect($siteconnect)
    {
        $this->siteconnect = $siteconnect;
    }

    /**
     * @return string
     */
    public function getMd()
    {
        return $this->md;
    }

    /**
     * @param string $md
     */
    public function setMd($md)
    {
        $this->md = $md;
    }


}
