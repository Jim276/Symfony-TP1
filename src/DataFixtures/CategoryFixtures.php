<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public const CATEGORY_REFERENCE = 'category';

    public function load(ObjectManager $manager): void
    {
        for($i=0; $i<3; $i++) {
            $category = new Category();
            $category->setTitle('Categorie no'.$i);
            $category->setDescription('Lorem ipsum dolor sit amet, consectetur adipiscing elit. ');
            $manager->persist($category);
        }

        $manager->flush();
        $this->addReference(self::CATEGORY_REFERENCE, $category);
    }
}
