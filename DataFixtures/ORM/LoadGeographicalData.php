<?php

namespace Meynell\GeographicalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Meynell\GeographicalBundle\Entity\Country;
use Meynell\GeographicalBundle\Entity\State;
use Meynell\GeographicalBundle\Entity\County;

class LoadGeographicalData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $country = new Country();
        $country->setName('United States');
        $manager->persist($country);
        $manager->flush();

        $this->addReference('us-country', $country);


        $state = new State();
        $state->setCountry($country);
        $state->setName('Florida');
        $manager->persist($state);
        $manager->flush();
        
        $this->addReference('fl-state', $state);


        $county = new County();
        $county->setState($state);
        $county->setName('Orange');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('orange-county', $county);


        $county = new County();
        $county->setState($state);
        $county->setName('Seminole');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('seminole-county', $county);


        $county = new County();
        $county->setState($state);
        $county->setName('Hillsborough');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('hillsborough-county', $county);


        $county = new County();
        $county->setState($state);
        $county->setName('Osceola');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('osceola-county', $county);


        $county = new County();
        $county->setState($state);
        $county->setName('Polk');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('polk-county', $county);


        $county = new County();
        $county->setState($state);
        $county->setName('Pinellas');
        $manager->persist($county);
        $manager->flush();
        
        $this->addReference('pinellas-county', $county);
    }

    public function getOrder()
    {
        return 1;
    }
}

