<?php

namespace Keynetic\ToDoListBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Todo
 *
 * @ORM\Table(name="todo")
 * @ORM\Entity
 */
class Todo {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_on", type="datetime", nullable=false)
     */
    private $createdOn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_modified_on", type="datetime", nullable=false)
     */
    private $lastModifiedOn;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var boolean
     *
     * @ORM\Column(name="done", type="boolean", nullable=false)
     */
    private $done = false;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean", nullable=false)
     */
    private $deleted = '0';

    public function __construct() {
        $this->createdOn = new \Datetime;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set createdOn
     *
     * @param \DateTime $createdOn
     * @return Todo
     */
    public function setCreatedOn($createdOn) {
        $this->createdOn = $createdOn;

        return $this;
    }

    /**
     * Get createdOn
     *
     * @return \DateTime 
     */
    public function getCreatedOn() {
        return $this->createdOn;
    }

    /**
     * Set lastModifiedOn
     *
     * @param \DateTime $lastModifiedOn
     * @return Todo
     */
    public function setLastModifiedOn($lastModifiedOn) {
        $this->lastModifiedOn = $lastModifiedOn;

        return $this;
    }

    /**
     * Get lastModifiedOn
     *
     * @return \DateTime 
     */
    public function getLastModifiedOn() {
        return $this->lastModifiedOn;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Todo
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set done
     *
     * @param boolean $done
     * @return Todo
     */
    public function setDone($done) {
        $this->done = $done;

        return $this;
    }

    /**
     * Get done
     *
     * @return boolean 
     */
    public function getDone() {
        return $this->done;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     * @return Todo
     */
    public function setDeleted($deleted) {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean 
     */
    public function getDeleted() {
        return $this->deleted;
    }

}
