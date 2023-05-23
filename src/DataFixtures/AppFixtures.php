<?php

namespace App\DataFixtures;

use App\Entity\Client;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setSociete('Jokes Cie');
        $client->setNom('GOLADE');
        $client->setPrenom('Larry');
        $client->setEmail('larry.golade@jokescie.com');           
        $manager->persist($client);

        $manager->flush();
    }
}
