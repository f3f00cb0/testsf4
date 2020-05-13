<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {
            /** @var Product $product */
            $product = new Product();
            $product->setTitre('produit : '.$i);
            $product->setDescription('description : '.$i);
            $product->setImage('http://image.png/'.$i);
            $product->setPrix(mt_rand(10, 100));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
