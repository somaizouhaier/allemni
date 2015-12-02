<?php

namespace atn\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserClassRoom
 *
 * @ORM\Table(name="user_classRoom")
 * @ORM\Entity(repositoryClass="atn\UserBundle\Entity\UserClassRoomRepository")
 */
class UserClassRoom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="userClassRooms", cascade={"remove"})
     * @ORM\JoinColumn(referencedColumnName="USER_ID")
     */
    protected $member;
    
    /**
     * @ORM\ManyToOne(targetEntity="atn\ClassRoomBundle\Entity\ClassRoom", inversedBy="userClassRooms", cascade={"remove"})
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $classRoom;
    
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
     * $var datetime $updateDate
     * @ORM\Column(name="update_date", type="date", nullable=true)
     */
    protected $updateDate;


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
     * Set member
     *
     * @param \atn\UserBundle\Entity\User $member
     * @return UserClassRoom
     */
    public function setMember(\atn\UserBundle\Entity\User $member = null)
    {
        $this->member = $member;

        return $this;
    }

    /**
     * Get member
     *
     * @return \atn\UserBundle\Entity\User 
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * Set classRoom
     *
     * @param \atn\UserBundle\Entity\ClassRoom $classRoom
     * @return UserClassRoom
     */
    public function setClassRoom(\atn\UserBundle\Entity\ClassRoom $classRoom = null)
    {
        $this->classRoom = $classRoom;

        return $this;
    }

    /**
     * Get classRoom
     *
     * @return \atn\UserBundle\Entity\ClassRoom 
     */
    public function getClassRoom()
    {
        return $this->classRoom;
    }

    /**
     * Set creationDate
     *
     * @param \DateTime $creationDate
     * @return UserClassRoom
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
     * @return UserClassRoom
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
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return UserClassRoom
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }
}
