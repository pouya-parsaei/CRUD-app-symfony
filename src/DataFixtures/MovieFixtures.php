<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie = new Movie();
        $movie->setTitle('the dark knight');
        $movie->setReleaseYear(2008);
        $movie->setDescription('this is the description of the batman');
        $movie->setImagePath('https://cdn.pixabay.com/photo/2023/12/04/16/15/ai-generated-8429782_1280.jpg');

        // Add data to pivot table
        $movie->addActor($this->getReference('actor_1'));
        $movie->addActor($this->getReference('actor_2'));

        $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle('avengers');
        $movie2->setReleaseYear(2019);
        $movie2->setDescription('this is the description of the avengers');
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2021/07/20/14/59/iron-man-6480952_1280.jpg');

        // Add data to pivot table
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();
    }
}
