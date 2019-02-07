<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Usager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $usager = new Usager();
        $usager->setNom("Dylan");
        $usager->setPrenom("Bob");
        $usager->setAdresse("Quelque part en Angleterre");
        $manager->persist($usager);

        $manager->flush();
    }
}
