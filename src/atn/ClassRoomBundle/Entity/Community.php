<?php

namespace atn\ClassRoomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * atn\ClassRoomBundle\Entity\Community
 *
 * @ORM\Table(name="community")
 * @ORM\Entity(repositoryClass="atn\ClassRoomBundle\Entity\CommunityRepository")
 */
class Community
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * $var string $name
     * @ORM\Column(name="name", type="string", length=100 )
     */
    protected $name;
    
    /**
     * $var text $description
     * @ORM\Column(name="description", type="text" )
     */
    protected $description;
    
    /**
     * $var datetime $creationDate
     * @ORM\Column(name="creation_date", type="date", nullable=true)
     */
    protected $creationDate;
    
    /**
     * $var datetime $removeDate
     * @ORM\Column(name="remove_date", type="date", nullable=true)
     */
    protected $removeDate;
    
    /**
     * @ORM\OneToMany(targetEntity="ClassRoom", mappedBy="community", cascade={"remove", "persist"})
     */
    protected $classRooms;
    
    /**
     * @ORM\ManyToOne(targetEntity="atn\PlaceBundle\Entity\City", inversedBy="Communitys", cascade={"remove"})
     * @ORM\JoinColumn(name="id", referencedColumnName="id")
     */
    protected $city;
    


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
     * Constructor
     */
    public function __construct()
    {
        $this->classRooms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add classRooms
     *
     * @param \atn\ClassRoomBundle\Entity\ClassRoom $classRooms
     * @return Community
     */
    public function addClassRoom(\atn\ClassRoomBundle\Entity\ClassRoom $classRooms)
    {
        $this->classRooms[] = $classRooms;

        return $this;
    }

    /**
     * Remove classRooms
     *
     * @param \atn\ClassRoomBundle\Entity\ClassRoom $classRooms
     */
    public function removeClassRoom(\atn\ClassRoomBundle\Entity\ClassRoom $classRooms)
    {
        $this->classRooms->removeElement($classRooms);
    }

    /**
     * Get classRooms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClassRooms()
    {
        return $this->classRooms;
    }

    
    /**
     * Set description
     *
     * @param string $description
     * @return Community
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return Community
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate
     *
     * @return \DateTime 
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set removeDate
     *
     * @param \DateTime $removeDate
     * @return Community
     */
    public function setRemoveDate($removeDate)
    {
        $this->removeDate = $removeDate;

        return $this;
    }

    /**
     * Get removeDate
     *
     * @return \DateTime 
     */
    public function getRemoveDate()
    {
        return $this->removeDate;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Community
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set city
     *
     * @param \atn\PlaceBundle\Entity\City $city
     * @return Community
     */
    public function setCity(\atn\PlaceBundle\Entity\City $city = null)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return \atn\PlaceBundle\Entity\City 
     */
    public function getCity()
    {
        return $this->city;
    }
}
