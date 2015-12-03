<?php

namespace atn\ClassRoomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * atn\ClassRoomBundle\Entity\ClassRoom
 *
 * @ORM\Table(name="classRoom")
 * @ORM\Entity(repositoryClass="atn\ClassRoomBundle\Entity\ClassRoomRepository")
 */
class ClassRoom {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(name="name", type="string", length=100 )
     */
    protected $name;

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
     * @ORM\ManyToOne(targetEntity="Community", inversedBy="classRooms", cascade={"remove"})
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $community;

    /**
     * @ORM\OneToMany(targetEntity="atn\UserBundle\Entity\UserClassRoom", mappedBy="classRoom", cascade={"remove", "persist"})
     */
    protected $userClassRooms;

    /**
     * @ORM\OneToMany(targetEntity="atn\ResourceBundle\Entity\Document", mappedBy="classRoom", cascade={"remove", "persist"})
     */
    protected $documents;

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
        $this->userClassRooms = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set community
     *
     * @param \atn\ClassRoomBundle\Entity\Community $community
     * @return ClassRoom
     */
    public function setCommunity(\atn\ClassRoomBundle\Entity\Community $community = null) {
        $this->community = $community;

        return $this;
    }

    /**
     * Get community
     *
     * @return \atn\ClassRoomBundle\Entity\Community 
     */
    public function getCommunity() {
        return $this->community;
    }

    /**
     * Add userClassRooms
     *
     * @param \atn\ClassRoomBundle\Entity\UserClassRoom $userClassRooms
     * @return ClassRoom
     */
    public function addUserClassRoom(\atn\ClassRoomBundle\Entity\UserClassRoom $userClassRooms) {
        $this->userClassRooms[] = $userClassRooms;

        return $this;
    }

    /**
     * Remove userClassRooms
     *
     * @param \atn\ClassRoomBundle\Entity\UserClassRoom $userClassRooms
     */
    public function removeUserClassRoom(\atn\ClassRoomBundle\Entity\UserClassRoom $userClassRooms) {
        $this->userClassRooms->removeElement($userClassRooms);
    }

    /**
     * Get userClassRooms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserClassRooms() {
        return $this->userClassRooms;
    }


    /**
     * Add documents
     *
     * @param \atn\ClassRoomBundle\Entity\Document $documents
     * @return ClassRoom
     */
    public function addDocument(\atn\ClassRoomBundle\Entity\Document $documents)
    {
        $this->documents[] = $documents;

        return $this;
    }

    /**
     * Remove documents
     *
     * @param \atn\ClassRoomBundle\Entity\Document $documents
     */
    public function removeDocument(\atn\ClassRoomBundle\Entity\Document $documents)
    {
        $this->documents->removeElement($documents);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return ClassRoom
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
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return ClassRoom
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
     * @return ClassRoom
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
}
