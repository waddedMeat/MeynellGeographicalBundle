<?php

namespace Meynell\GeographicalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Meynell\GeographicalBundle\Entity\Country;
use Meynell\GeographicalBundle\Entity\State;
use Meynell\GeographicalBundle\Entity\County;

class LoadGeographicalData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load($manager)
    {
        $country = new Country();
        $country->setName('United States');
        $manager->persist($country);
        $manager->flush();

        $state = new State();
        $state->setCountry($country);
        $state->setName('Florida');
        $manager->persist($state);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Orange');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Seminole');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Hillsborough');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Osceola');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Polk');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setState($state);
        $county->setName('Pinellas');
        $manager->persist($county);
        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}

