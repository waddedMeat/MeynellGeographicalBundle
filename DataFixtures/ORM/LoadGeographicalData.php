<?php

namespace Meynell\GeographicalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Meynell\GeographicalBundle\Entity\Country;
use Meynell\GeographicalBundle\Entity\State;
use Meynell\GeographicalBundle\Entity\County;

class LoadBotData implements FixtureInterface
{
    public function load($manager)
    {
        $country = new Country();
        $country->setName('United States');
        $manager->persist($country);
        $manager->flush();

        $state = new State();
        $state->setCountryId($country->getId());
        $state->setName('Florida');
        $manager->persist($state);
        $manager->flush();

        $county = new County();
        $county->setStateId($state->getId());
        $county->setName('Orange');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setStateId($state->getId());
        $county->setName('Seminole');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setStateId($state->getId());
        $county->setName('Hillsborough');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setStateId($state->getId());
        $county->setName('Osceola');
        $manager->persist($county);
        $manager->flush();

        $county = new County();
        $county->setStateId($state->getId());
        $county->setName('Polk');
        $manager->persist($county);
        $manager->flush();
    }
}

