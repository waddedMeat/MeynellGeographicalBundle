<?php

namespace Meynell\GeographicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Meynell\GeographicalBundle\Entity\State
 *
 * @ORM\Table(name="state")
 * @ORM\Entity
 */
class State
{
    /**                                                                         
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="states")
     * @ORM\JoinColumn(name="country_id", referencedColumnName="id"))
     */                                                                         
     protected $country;

    /**
     * @ORM\OneToMany(targetEntity="County", mappedBy="state")
     */                                                                            
     protected $counties;
                                                                                   
     public function __construct()                                                 
     {                                                                             
         $this->counties = new ArrayCollection();
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
     * @var integer $country_id
     *
     * @ORM\Column(name="country_id", type="integer")
     */
    private $country_id;

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
     * Set country_id
     *
     * @param integer $countryId
     */
    public function setCountryId($countryId)
    {
        $this->country_id = $countryId;
    }

    /**
     * Get country_id
     *
     * @return integer 
     */
    public function getCountryId()
    {
        return $this->country_id;
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
     * Set country
     *
     * @param Meynell\GeographicalBundle\Entity\Country $country
     */
    public function setCountry(\Meynell\GeographicalBundle\Entity\Country $country)
    {
        $this->country = $country;
    }

    /**
     * Get country
     *
     * @return Meynell\GeographicalBundle\Entity\Country 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Add counties
     *
     * @param Meynell\GeographicalBundle\Entity\County $counties
     */
    public function addCounty(\Meynell\GeographicalBundle\Entity\County $counties)
    {
        $this->counties[] = $counties;
    }

    /**
     * Get counties
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCounties()
    {
        return $this->counties;
    }
}
