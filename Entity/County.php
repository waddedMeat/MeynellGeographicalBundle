<?php

namespace Meynell\GeographicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meynell\GeographicalBundle\Entity\County
 *
 * @ORM\Table(name="counties")
 * @ORM\Entity
 */
class County
{
    /**                                                                         
     * @ORM\ManyToOne(targetEntity="State", inversedBy="counties")
     * @ORM\JoinColumn(name="state_id", referencedColumnName="id"))
     */                                                                         
     protected $state;

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $state_id
     *
     * @ORM\Column(name="state_id", type="integer")
     */
    private $state_id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;


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
     * Set state_id
     *
     * @param integer $stateId
     */
    public function setStateId($stateId)
    {
        $this->state_id = $stateId;
    }

    /**
     * Get state_id
     *
     * @return integer 
     */
    public function getStateId()
    {
        return $this->state_id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set state
     *
     * @param Meynell\GeographicalBundle\Entity\State $state
     */
    public function setState(\Meynell\GeographicalBundle\Entity\State $state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return Meynell\GeographicalBundle\Entity\State 
     */
    public function getState()
    {
        return $this->state;
    }
}