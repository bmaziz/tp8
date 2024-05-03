<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Factory\ArticleFactory ;
 
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        ArticleFactory::createMany(10);
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
}
