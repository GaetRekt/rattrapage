<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker;

class AppFixtures extends Fixture
{
  public function load(ObjectManager $manager)
  {
    $faker = Faker\Factory::create('fr_FR');

    for ($i = 0; $i < 25; $i++) {
      $product = new Product();

      $product
        ->setName($faker->sentence(2))
        ->setDescription($faker->text(250))
        ->setPromo($faker->boolean(35))
        ->setCreated($faker->dateTimeBetween('-2 months'))
        ->setPicture('https://source.unsplash.com/1140x720')
      ;

      $manager->persist($product);
    }

    $manager->flush();
  }
}
