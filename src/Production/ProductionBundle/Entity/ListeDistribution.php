<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListeDistribution
 *
 * @ORM\Table(name="liste_distribution")
 * @ORM\Entity
 */
class ListeDistribution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_distribution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDistribution;

    /**
     * @var string
     *
     * @ORM\Column(name="code_firme", type="string", length=9, nullable=false)
     */
    private $codeFirme = '';

    /**
     * @var string
     *
     * @ORM\Column(name="rs_abrege", type="string", length=50, nullable=true)
     */
    private $rsAbrege;

    /**
     * @var string
     *
     * @ORM\Column(name="rs_complete", type="string", length=50, nullable=true)
     */
    private $rsComplete;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=300, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="Dir1", type="string", length=50, nullable=true)
     */
    private $dir1;

    /**
     * @var string
     *
     * @ORM\Column(name="Fct1", type="string", length=50, nullable=true)
     */
    private $fct1;

    /**
     * @var string
     *
     * @ORM\Column(name="Dir5", type="string", length=50, nullable=true)
     */
    private $dir5;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel1", type="string", length=50, nullable=true)
     */
    private $tel1;

    /**
     * @var string
     *
     * @ORM\Column(name="Tel2", type="string", length=50, nullable=true)
     */
    private $tel2;

    /**
     * @var string
     *
     * @ORM\Column(name="Fax", type="string", length=50, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="eff", type="string", length=50, nullable=true)
     */
    private $eff;

    /**
     * @var string
     *
     * @ORM\Column(name="CA", type="string", length=50, nullable=true)
     */
    private $ca;

    /**
     * @var string
     *
     * @ORM\Column(name="C_fic", type="string", length=50, nullable=true)
     */
    private $cFic;

    /**
     * @var string
     *
     * @ORM\Column(name="client_KN", type="string", length=50, nullable=true)
     */
    private $clientKn;

    /**
     * @var string
     *
     * @ORM\Column(name="client_TC", type="string", length=50, nullable=true)
     */
    private $clientTc;

    /**
     * @var string
     *
     * @ORM\Column(name="Zone", type="string", length=50, nullable=true)
     */
    private $zone;

    /**
     * @var string
     *
     * @ORM\Column(name="Activite", type="string", length=100, nullable=true)
     */
    private $activite;

    /**
     * @var string
     *
     * @ORM\Column(name="Email1", type="string", length=50, nullable=true)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="Email2", type="string", length=50, nullable=true)
     */
    private $email2;

    /**
     * @var integer
     *
     * @ORM\Column(name="affecter", type="integer", nullable=true)
     */
    private $affecter;

    /**
     * @var integer
     *
     * @ORM\Column(name="traiter", type="integer", nullable=true)
     */
    private $traiter = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="aff", type="integer", nullable=true)
     */
    private $aff = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="siteweb", type="string", length=50, nullable=true)
     */
    private $siteweb;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=50, nullable=true)
     */
    private $quartier;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postale", type="string", length=10, nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="nature", type="string", length=50, nullable=true)
     */
    private $nature;

    /**
     * @var string
     *
     * @ORM\Column(name="rc", type="string", length=20, nullable=true)
     */
    private $rc;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_rc", type="string", length=30, nullable=true)
     */
    private $villeRc;

    /**
     * @var string
     *
     * @ORM\Column(name="ice", type="string", length=20, nullable=true)
     */
    private $ice;

    /**
     * @var string
     *
     * @ORM\Column(name="datecreation", type="string", length=20, nullable=true)
     */
    private $datecreation;

    /**
     * @var string
     *
     * @ORM\Column(name="taxe_professionnelle", type="string", length=40, nullable=true)
     */
    private $taxeProfessionnelle;

    /**
     * @var string
     *
     * @ORM\Column(name="identifiant_fiscale", type="string", length=50, nullable=true)
     */
    private $identifiantFiscale;

    /**
     * @var string
     *
     * @ORM\Column(name="capital", type="string", length=40, nullable=true)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="forme", type="string", length=40, nullable=true)
     */
    private $forme;

    /**
     * @var string
     *
     * @ORM\Column(name="x", type="string", length=50, nullable=true)
     */
    private $x;

    /**
     * @var string
     *
     * @ORM\Column(name="y", type="string", length=50, nullable=true)
     */
    private $y;


}
