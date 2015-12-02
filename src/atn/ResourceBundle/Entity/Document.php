<?php

namespace atn\ResourceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="atn\ResourceBundle\Entity\DocumentRepository")
 */
class Document {

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
     * @var classRoom
     * @ORM\ManyToOne(targetEntity="atn\ClassRoomBundle\Entity\ClassRoom", inversedBy="documents", cascade={"remove"})
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    protected $classRoom;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }


    /**
     * Set classRoom
     *
     * @param \atn\ResourceBundle\Entity\ClassRoom $classRoom
     * @return Document
     */
    public function setClassRoom(\atn\ResourceBundle\Entity\ClassRoom $classRoom = null)
    {
        $this->classRoom = $classRoom;

        return $this;
    }

    /**
     * Get classRoom
     *
     * @return \atn\ResourceBundle\Entity\ClassRoom 
     */
    public function getClassRoom()
    {
        return $this->classRoom;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Document
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
     * @return Document
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
     * @return Document
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
