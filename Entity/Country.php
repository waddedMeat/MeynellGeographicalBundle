<?php

namespace Meynell\GeographicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meynell\GeographicalBundle\Entity\Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @ORM\OneToMany(targetEntity="State", mappedBy="country")
     */                                                                            
     protected $states;
                                                                                   
     public function __construct()                                                 
     {                                                                             
         $this->states = new ArrayCollection();
     } 

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Add states
     *
     * @param Meynell\GeographicalBundle\Entity\State $states
     */
    public function addState(\Meynell\GeographicalBundle\Entity\State $states)
    {
        $this->states[] = $states;
    }

    /**
     * Get states
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getStates()
    {
        return $this->states;
    }
}
