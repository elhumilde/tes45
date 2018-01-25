<?php

namespace Production\ProductionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * InscriptionsDistribution
 *
 * @ORM\Table(name="inscriptions_distribution", uniqueConstraints={@ORM\UniqueConstraint(name="_udid", columns={"_udid"})})
 * @ORM\Entity
 */
class InscriptionsDistribution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="_oid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oid;

    /**
     * @var integer
     *
     * @ORM\Column(name="_userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     * @var string
     *
     * @ORM\Column(name="_udid", type="string", length=200, nullable=true)
     */
    private $udid;

    /**
     * @var string
     *
     * @ORM\Column(name="_cfir", type="string", length=100, nullable=true)
     */
    private $cfir;

    /**
     * @var string
     *
     * @ORM\Column(name="_forme_juridique", type="text", nullable=true)
     */
    private $formeJuridique;

    /**
     * @var string
     *
     * @ORM\Column(name="_date_creation_soc", type="text", nullable=true)
     */
    private $dateCreationSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_capital", type="text", nullable=true)
     */
    private $capital;

    /**
     * @var string
     *
     * @ORM\Column(name="_identifiant_fiscal", type="text", nullable=true)
     */
    private $identifiantFiscal;

    /**
     * @var string
     *
     * @ORM\Column(name="_patente", type="text", nullable=true)
     */
    private $patente;

    /**
     * @var string
     *
     * @ORM\Column(name="_rubrique", type="text", nullable=true)
     */
    private $rubrique;

    /**
     * @var string
     *
     * @ORM\Column(name="_rubrique_tlc", type="text", nullable=true)
     */
    private $rubriqueTlc;

    /**
     * @var string
     *
     * @ORM\Column(name="_prestations", type="text", nullable=true)
     */
    private $prestations;

    /**
     * @var string
     *
     * @ORM\Column(name="_produits", type="text", nullable=true)
     */
    private $produits;

    /**
     * @var string
     *
     * @ORM\Column(name="_raison_sociale", type="text", nullable=true)
     */
    private $raisonSociale;

    /**
     * @var string
     *
     * @ORM\Column(name="_adresse_soc", type="text", nullable=true)
     */
    private $adresseSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_localite_soc", type="string", length=10, nullable=true)
     */
    private $localiteSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_telephone_soc", type="text", nullable=true)
     */
    private $telephoneSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_fax_soc", type="text", nullable=true)
     */
    private $faxSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_email_soc", type="text", nullable=true)
     */
    private $emailSoc;

    /**
     * @var string
     *
     * @ORM\Column(name="_registre_commerce", type="text", nullable=true)
     */
    private $registreCommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="_ville_registre_commerce", type="string", length=10, nullable=true)
     */
    private $villeRegistreCommerce;

    /**
     * @var string
     *
     * @ORM\Column(name="_type", type="text", nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="_effectif", type="text", nullable=true)
     */
    private $effectif;

    /**
     * @var string
     *
     * @ORM\Column(name="_logo", type="text", nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="_quartier", type="text", nullable=true)
     */
    private $quartier;

    /**
     * @var string
     *
     * @ORM\Column(name="_code_postale", type="text", nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="_telephone2_soc", type="text", nullable=true)
     */
    private $telephone2Soc;

    /**
     * @var string
     *
     * @ORM\Column(name="_site_web", type="text", nullable=true)
     */
    private $siteWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="_longitude", type="text", nullable=true)
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="_latitude", type="text", nullable=true)
     */
    private $latitude;

    /**
     * @var string
     *
     * @ORM\Column(name="_objet", type="text", nullable=true)
     */
    private $objet;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_date_ins", type="datetime", nullable=false)
     */
    private $dateIns = 'CURRENT_TIMESTAMP';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_date_trait", type="datetime", nullable=true)
     */
    private $dateTrait;

    /**
     * @var string
     *
     * @ORM\Column(name="_comments", type="text", nullable=true)
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="_statut", type="string", length=20, nullable=true)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="_date_mise_enligne", type="datetime", nullable=true)
     */
    private $dateMiseEnligne;

    /**
     * @var array
     *
     * @ORM\Column(name="travers", type="array", nullable=true)
     */
    private $travers;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_voie", type="text", nullable=true)
     */
    private $numeroVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="codevoie", type="text", nullable=true)
     */
    private $codevoie;

    /**
     * @var string
     *
     * @ORM\Column(name="complement_voie", type="text", nullable=true)
     */
    private $complementVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="cadre", type="string", length=22, nullable=true)
     */
    private $cadre;

    /**
     * @var string
     *
     * @ORM\Column(name="export", type="text", nullable=true)
     */
    private $export;

    /**
     * @var string
     *
     * @ORM\Column(name="zonexport", type="text", nullable=true)
     */
    private $zonexport;

    /**
     * @var string
     *
     * @ORM\Column(name="import", type="text", nullable=true)
     */
    private $import;

    /**
     * @var string
     *
     * @ORM\Column(name="zoneimport", type="text", nullable=true)
     */
    private $zoneimport;


}
