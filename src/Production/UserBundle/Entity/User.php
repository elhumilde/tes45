<?php

namespace Production\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="UserRepository"))
 * @ORM\Table(name="user")
 * @ORM\HasLifecycleCallbacks
 */
class User extends BaseUser{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $family_name
     *
     * @ORM\Column(name="family_name", type="string", length=255, nullable=true)
     */
    private $family_name;

    /**
     * @var string $first_name
     *
     * @ORM\Column(name="first_name", type="string", length=255, nullable=true)
     */
    private $first_name;

    /**
     * One Customer has One Cart.
     * @ORM\OneToOne(targetEntity="\Production\ProductionBundle\Entity\AffectationEtapeUtilisateur", mappedBy="utilisateur")
     */
    private $etapeUtilisateur;


    /**
     * @var string $tel
     *
     * @ORM\Column(name="tel", type="string", length=45, nullable=true)
     */
    private $tel;

    /**
     * @return mixed
     */
    public function getCommercial()
    {
        return $this->commercial;
    }

    /**
     * @param mixed $commercial
     */
    public function setCommercial($commercial)
    {
        $this->commercial = $commercial;
    }

    /**
     * @var \DateTime $created
     *
     * @ORM\Column(name="created", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $created;



    /**
     * @var \DateTime $lastActivity
     *
     * @ORM\Column(name="lastActivity", type="datetime")
     * @Gedmo\Timestampable(on="create")
     */
    protected $lastActivity;
    
    /**
    * @ORM\OneToOne(targetEntity="Production\ProductionBundle\Entity\image", cascade={"remove", "persist"})
    */
    private $image;

    /**
     * @var string $service
     *
     * @ORM\Column(name="service", type="string", length=45, nullable=true)
     */
    private $service;



    /************ constructeur ************/
    
    public function __construct()
    {
        parent::__construct();
        $this->created = new \DateTime;
        $this->lastActivity = new \DateTime;
        $this->image= new \Production\ProductionBundle\Entity\image();

    }
    
    /************ getters & setters  ************/

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullName()
    {
        return $this->family_name.' '.$this->first_name;
    }

    /**
     * Set family_name
     *
     * @param string $familyName
     * @return profile
     */
    public function setFamilyName($familyName)
    {
        $this->family_name = $familyName;
    
        return $this;
    }

    /**
     * Get family_name
     *
     * @return string 
     */
    public function getFamilyName()
    {
        return $this->family_name;
    }

    /**
     * Set first_name
     *
     * @param string $firstName
     * @return profile
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;
    
        return $this;
    }

    /**
     * Get first_name
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return profile
     */
    public function setTel($tel)
    {
        $this->tel = $tel;
    
        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return User
     */
    public function setCreated($created) {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime 
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     * @return User
     */
    public function setLastActivity($lastActivity) {
        $this->lastActivity = $lastActivity;

        return $this;
    }

    /**
     * Get lastActivity
     *
     * @return \DateTime 
     */
    public function getLastActivity() {
        return $this->lastActivity;
    }

    /**
     * Set lastActivity
     *
     * @param \DateTime $lastActivity
     * @return User
     */
    public function isActiveNow() {
        $this->lastActivity = new \DateTime();

        return $this;
    }

    /**
     * Set image
     *
     * @param \Production\ProductionBundle\Entity\image $image
     * @return profile
     */
    public function setImage(\Production\ProductionBundle\Entity\image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \Production\ProductionBundle\Entity\image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar() {

        return $this->image->getWebPath();
    }

    /**
     * Get the most significant role
     *
     * @return string 
     */
    public function getRole()
    {
        if(in_array('ROLE_ADMIN', $this->roles)) $role = 'Administrateur';
        else if(in_array('ROLE_INFORMATION', $this->roles)) $role = 'traitement information';
        else if(in_array('ROLE_COMMERCIAL', $this->roles)) $role = 'Commercial';
        else if(in_array('ROLE_MARKETING', $this->roles)) $role = 'Marketing';
        else if(in_array('ROLE_CONTACT', $this->roles)) $role = 'traitement des contacts';
        else if(in_array('ROLE_SUPERADMIN', $this->roles)) $role = 'Super Administrateur';
        else $role = 'utilisateur';
        return $role;
    }






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
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param string $service
     */
    public function setService($service)
    {
        $this->service = $service;
    }

    /**
     * @return mixed
     */
    public function getEtapeUtilisateur()
    {
        return $this->etapeUtilisateur;
    }

    /**
     * @param mixed $etapeUtilisateur
     */
    public function setEtapeUtilisateur($etapeUtilisateur)
    {
        $this->etapeUtilisateur = $etapeUtilisateur;
    }



}
