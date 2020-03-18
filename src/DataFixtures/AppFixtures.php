<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cours = new Cours();
        $cours->setTitle('Les bases de l\'entrepreunariat')
            ->setImg('img/logo.png')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lorem tortor, vehicula eu posuere vitae, vulputate at ipsum. Pellentesque fringilla commodo laoreet. Fusce feugiat tellus lorem, vel posuere ex sagittis eu. Donec erat ipsum, tristique at egestas non, blandit ut neque. Vivamus iaculis fermentum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus et auctor volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc non mollis diam. Quisque vitae est ante. Phasellus nec purus mattis, pharetra nisl in, pellentesque massa. Nulla vel sapien euismod, pellentesque risus id, dignissim enim. Nam ornare ac turpis vel molestie. In in enim ligula. Duis pharetra metus vel leo facilisis ultricies. Vestibulum sagittis, tortor ac aliquam ornare, lectus sem condimentum libero, in dignissim felis dui sed mi.')

        ;

        $manager->persist($cours);

        $manager->flush();
    }
}
