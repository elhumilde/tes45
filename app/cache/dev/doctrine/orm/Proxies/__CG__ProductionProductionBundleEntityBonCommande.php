<?php

namespace Proxies\__CG__\Production\ProductionBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BonCommande extends \Production\ProductionBundle\Entity\BonCommande implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'id', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'numBc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'codeFirme', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'customer', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'vendeur', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'ligne', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'dateBc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'datePrevueReunionClient', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'codeVendeur', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'montantHt', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'montantTtc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'idClient', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'valider', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'ordre', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'welcomes');
        }

        return array('__isInitialized__', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'id', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'numBc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'codeFirme', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'customer', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'vendeur', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'ligne', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'dateBc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'datePrevueReunionClient', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'codeVendeur', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'montantHt', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'montantTtc', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'idClient', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'valider', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'ordre', '' . "\0" . 'Production\\ProductionBundle\\Entity\\BonCommande' . "\0" . 'welcomes');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BonCommande $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumBc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumBc', array());

        return parent::getNumBc();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumBc($numBc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumBc', array($numBc));

        return parent::setNumBc($numBc);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeFirme()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeFirme', array());

        return parent::getCodeFirme();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeFirme($codeFirme)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeFirme', array($codeFirme));

        return parent::setCodeFirme($codeFirme);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateBc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateBc', array());

        return parent::getDateBc();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateBc($dateBc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateBc', array($dateBc));

        return parent::setDateBc($dateBc);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatePrevueReunionClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatePrevueReunionClient', array());

        return parent::getDatePrevueReunionClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatePrevueReunionClient($datePrevueReunionClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatePrevueReunionClient', array($datePrevueReunionClient));

        return parent::setDatePrevueReunionClient($datePrevueReunionClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodeVendeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodeVendeur', array());

        return parent::getCodeVendeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodeVendeur($codeVendeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodeVendeur', array($codeVendeur));

        return parent::setCodeVendeur($codeVendeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantHt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantHt', array());

        return parent::getMontantHt();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantHt($montantHt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantHt', array($montantHt));

        return parent::setMontantHt($montantHt);
    }

    /**
     * {@inheritDoc}
     */
    public function getMontantTtc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMontantTtc', array());

        return parent::getMontantTtc();
    }

    /**
     * {@inheritDoc}
     */
    public function setMontantTtc($montantTtc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMontantTtc', array($montantTtc));

        return parent::setMontantTtc($montantTtc);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdClient()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdClient', array());

        return parent::getIdClient();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdClient($idClient)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdClient', array($idClient));

        return parent::setIdClient($idClient);
    }

    /**
     * {@inheritDoc}
     */
    public function getCustomer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', array());

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer($customer)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', array($customer));

        return parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getVendeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVendeur', array());

        return parent::getVendeur();
    }

    /**
     * {@inheritDoc}
     */
    public function setVendeur($vendeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVendeur', array($vendeur));

        return parent::setVendeur($vendeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getLigne()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLigne', array());

        return parent::getLigne();
    }

    /**
     * {@inheritDoc}
     */
    public function setLigne($ligne)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLigne', array($ligne));

        return parent::setLigne($ligne);
    }

    /**
     * {@inheritDoc}
     */
    public function getValider()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getValider', array());

        return parent::getValider();
    }

    /**
     * {@inheritDoc}
     */
    public function setValider($valider)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setValider', array($valider));

        return parent::setValider($valider);
    }

    /**
     * {@inheritDoc}
     */
    public function getWelcomes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWelcomes', array());

        return parent::getWelcomes();
    }

    /**
     * {@inheritDoc}
     */
    public function setWelcomes($welcomes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWelcomes', array($welcomes));

        return parent::setWelcomes($welcomes);
    }

    /**
     * {@inheritDoc}
     */
    public function getOrdre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrdre', array());

        return parent::getOrdre();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrdre($ordre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrdre', array($ordre));

        return parent::setOrdre($ordre);
    }

}
