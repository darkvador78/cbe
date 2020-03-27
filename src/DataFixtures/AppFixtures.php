<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use App\DataFixtures\UserFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;


class AppFixtures extends Fixture implements DependentFixtureInterface

{
    public function load(ObjectManager $manager)
    {
        $cours = new Cours();
        $cours->setTitle('Les bases d\'une page web')
            ->setImageName('entrepreneur.jpg')
            ->setContent('Quelle activité vais-je exercer ?A partir de votre idée de création ou de reprise, il vous faut rassembler des informations sur l’activité envisagée en général, puis sur ses caractéristiques et ses débouchés : est-ce un secteur à fort potentiel ? N’hésitez pas à solliciter des avis extérieurs (proches, organismes d’aide à la création, personnes travaillant dans ce secteur...) pour vous aider dans vos réflexions. Vous devez également vous renseigner sur la réglementation éventuelle de votre activité (diplômesrequis, expérience professionnelle, normes d’exploitation...).Quelles sont mes compétences ?La réalisation de votre projet nécessite d’abord la maîtrise et la connaissance du métier et de ses applications. Si vous ne possédez pas ce savoir-faire, vous devez suivre une formation professionnelle.Par ailleurs, la direction d’une entreprise fait appel à des compétences spécifiques : vous devez être initié aux mécanismes de comptabilité/gestion et faire preuve d’aisance relationnelle et commerciale. Les formations à la création d’entreprise existent, elles vous permettront de vous imprégner de ces notions.Quelles sont mes ressources ? (motivations, finances et temps)Plus  vous  serez  motivé,  plus  vous  serez  capable  de  surmonter  les  difficultés  inhérentes  à  lagestion  de l’entreprise. Interrogez-vous sur les raisons d’un tel challenge.  Mener  à  terme  un  projet  de création  ou  de reprise d’entreprise implique envie, courage et ténacité !La création d’entreprise n’est pas qu’une question de  motivation. Les compétences et l’expérience dans  le secteur d’activité sont indispensables.Motivation, finances  et temps sont des éléments clés dans la création et doivent être dissociés. Toute activité engendre  des  frais  et  nécessite  des fonds  au  départ.L’enjeu consiste  ici  à  prévoir d’une part, la mise  censée financer vos premiers investissements et d’autre part, le fonds de roulement destiné à couvrir les charges des premiers mois non couvertes par des entrées.Assurez-vousque vos apports, qu’ils soient en espèces ou en nature, représentent un montant suffisant.Le temps de préparation constitue également un facteur clé de réussite. Il permet d’anticiper les problèmes et de  ne pas  se  précipiter.  Recensez  les différentes  contraintes  qui  menacent  votre  projet afin  de  les  lever  etefforcez-vous de l\exposer par écrit et de le structurer.Et la reprise d’entreprise ?Si vous ne vous sentez pas l’âme d’un créateur, la reprise est une solution à envisager. Elle vous permettra de vous  appuyer  sur  une  notoriété, un  passé ainsi  qu’une clientèle déjà existante, un  réseau  de  partenaires,  des locaux, du matériel.Deux facteurs vous assurent le succès d’une telle opération : le temps et la préparation.Vous devrez réaliser un diagnostic de l’entreprise à reprendreafin de mettre en évidence ses points forts etses points faibles. Cela passe nécessairement par uneanalyse du métier, du marché, du produit, mais aussi par un diagnostic financier.L’évaluation de l’entreprise  découle  de  ce  diagnostic et de l’étude  de  documents  de  présentation que  le vendeur doit fournir à l’acheteur. Si la valeur de l’entreprise dépend de cette évaluation, le prix, lui, est fixé par la négociation.La reprise d’entreprise : une opération complexe nécessitant le conseil de professionnels qualifiés.Votre Chambre de commerce et d’industrie ouChambre  de Métiers et de l’Artisanat  développe  un réseau d’appui à la transmission/reprise d’entreprise. Des conseillers spécialisés vous accompagnent dans vos projets et  vousmettent  en  contact  avec  des  cédants.  Les  réseaux publient  ')
            ->setCategory($this->getReference(CategoryFixtures::CATEGORY_2))
            ->setUser($this->getReference(UserFixtures::USER))
        ;
        $manager->persist($cours);

        $cours2 = new Cours();
        $cours2->setTitle('Les bases du design')
            ->setImageName('entrepreneur.jpg')
            ->setContent('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam lorem tortor, vehicula eu posuere vitae, vulputate at ipsum. Pellentesque fringilla commodo laoreet. Fusce feugiat tellus lorem, vel posuere ex sagittis eu. Donec erat ipsum, tristique at egestas non, blandit ut neque. Vivamus iaculis fermentum varius. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In tempus lacus et auctor volutpat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc non mollis diam. Quisque vitae est ante. Phasellus nec purus mattis, pharetra nisl in, pellentesque massa. Nulla vel sapien euismod, pellentesque risus id, dignissim enim. Nam ornare ac turpis vel molestie. In in enim ligula. Duis pharetra metus vel leo facilisis ultricies. Vestibulum sagittis, tortor ac aliquam ornare, lectus sem condimentum libero, in dignissim felis dui sed mi.')
            ->setCategory($this->getReference(CategoryFixtures::CATEGORY_1))
            ->setUser($this->getReference(UserFixtures::USER_2))
        ;
        $manager->persist($cours2);
        $manager->flush();
    }



    public function getDependencies() {
        return array(
            CategoryFixtures::class,
            UserFixtures::class,
        );
    }
}
