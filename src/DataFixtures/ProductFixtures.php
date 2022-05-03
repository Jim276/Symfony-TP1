<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<5; $i++) {
            $product = new Product();
            $product->setName('produit no'.$i);
            $product->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
            Morbi eget vehicula nisl. Mauris convallis et nisl blandit venenatis. 
            Ut nec lacus vel justo pharetra ullamcorper. ');
            $product->setPrice(mt_rand(1,150));
            $product->setCategory($this->getReference(CategoryFixtures::CATEGORY_REFERENCE));
            $manager->persist($product);
        }

        $manager->flush();
    }
}
