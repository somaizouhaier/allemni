<?php

namespace atn\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 * @ORM\Table(name="USER")
 * @ORM\Entity(repositoryClass="atn\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
     public function __construct()
    {
        parent::__construct();
        $this->roles = array(static::ROLE_DEFAULT); // static::ROLE_DEFAULT = "ROLE_USER"
    }
      
   /**
    * 
    * @var integer
    * @ORM\Column(name="USER_ID", type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    
    */
    
    protected $id;
   /**
    * 
    * @var string
    * @ORM\Column(name="USER_PHONE", type="string",length=30,nullable=true)
    * 
    */
    protected $phone;
    
   
    /**
    * 
    * @var string
    * @ORM\Column(name="USER_STATUS", type="string",length=30,nullable=true)
    * 
    */
    protected $status;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_FIRST_NAME", type="string",length=50,nullable=true)
    * 
    */
    protected $firstName;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_LAST_NAME", type="string",length=50,nullable=true)
    * 
    */
    protected $lastName;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_FACEBOOK_ID", type="string",length=100,nullable=true)
    * 
    */
    protected $facebookID;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_GOOGLE_ID", type="string",length=100,nullable=true)
    * 
    */
    protected $googleId;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_ADRESS", type="string",length=100,nullable=true)
    * 
    */
    protected $adress;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_COUTRY", type="string",length=50,nullable=true)
    * 
    */
    protected $country;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_COMPANY", type="string",length=30,nullable=true)
    * 
    */
    protected $company;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_CREATION_DATE", type="string",length=30,nullable=true)
    * 
    */
    protected $creationDate;
     /**
    * 
    * @var string
    * @ORM\Column(name="USER_UPDATING_DATE", type="string",length=30,nullable=true)
    * 
    */
    protected $updatingDate;
    
    
     /**
     * @return string
     */
    
    public function getId()
    {
        return $this->id;
        
    }
    /**
     * @return string
     */
    

    /**
     * Set phone
     *
     * @param string $phone
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string 
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return User
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set facebookID
     *
     * @param string $facebookID
     * @return User
     */
    public function setFacebookID($facebookID)
    {
        $this->facebookID = $facebookID;

        return $this;
    }

    /**
     * Get facebookID
     *
     * @return string 
     */
    public function getFacebookID()
    {
        return $this->facebookID;
    }

    /**
     * Set googleId
     *
     * @param string $googleId
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;

        return $this;
    }

    /**
     * Get googleId
     *
     * @return string 
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return User
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set company
     *
     * @param string $company
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string 
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set creationDate
     *
     * @param string $creationDate
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return string 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set updatingDate
     *
     * @param string $updatingDate
     * @return User
     */
    public function setUpdatingDate($updatingDate)
    {
        $this->updatingDate = $updatingDate;

        return $this;
    }

    /**
     * Get updatingDate
     *
     * @return string 
     */
    public function getUpdatingDate()
    {
        return $this->updatingDate;
    }
}
