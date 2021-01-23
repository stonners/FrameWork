<?php

namespace App\DataFixtures;

use App\Entity\Store\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

final class AppFixtures extends Fixture
{
    /** @var ObjectManager */
    private ObjectManager $manager;

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $this->manager = $manager;
        $this->loadProducts();
        $this->manager->flush();
    }

    private function loadProducts()
    {
        for ($i = 0; $i < 20; $i++) {
            $product = (new Product())
                ->setName('product' . $i)
                ->setDescription('Produit de description' . $i)
                ->setPrice(mt_rand(10, 100));


            $this->manager->persist($product);
        }
    }
}
