<?php

namespace Meynell\GeographicalBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Meynell\GeographicalBundle\Entity\State
 *
 * @ORM\Table(name="states")
 * @ORM\Entity
 */
class State
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
}
