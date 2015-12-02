<?php

namespace atn\PlaceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="atn\PlaceBundle\Entity\CityRepository")
 */
class City {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     * 
     * @ORM\Column(name="name", type="string", length=100 )
     */
    protected $name;

    /**
     * @ORM\OneToMany(targetEntity="atn\ClassRoomBundle\Entity\Community", mappedBy="city", cascade={"remove", "persist"})
     */
    protected $communitys;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->communitys = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add communitys
     *
     * @param \atn\PlaceBundle\Entity\Community $communitys
     * @return City
     */
    public function addCommunity(\atn\PlaceBundle\Entity\Community $communitys) {
        $this->communitys[] = $communitys;

        return $this;
    }

    /**
     * Remove communitys
     *
     * @param \atn\PlaceBundle\Entity\Community $communitys
     */
    public function removeCommunity(\atn\PlaceBundle\Entity\Community $communitys) {
        $this->communitys->removeElement($communitys);
    }

    /**
     * Get communitys
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCommunitys() {
        return $this->communitys;
    }


    /**
     * Set name
     *
     * @param string $name
     * @return City
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
}
