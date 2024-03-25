<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Image;
use App\Entity\Article;
use App\Entity\InformationAboutMe;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setContent( content: 'Macchiato, milk skinny sugar id, sit caffeine grounds fair trade that. Extraction blue mountain acerbic caffeine extra  that bar  instant bar  robust id lungo. Instant espresso wings, a, con panna lungo that acerbic café au lait. Ristretto, cinnamon half and half macchiato and frappuccino cinnamon con panna turkish.
        Blue mountain, fair trade, single shot decaffeinated carajillo cappuccino a barista. Affogato variety, flavour sugar extraction percolator robusta. Black acerbic, blue mountain that, qui, roast id turkish café au lait roast aroma half and half. Cinnamon extraction breve coffee dark, coffee plunger pot dripper so crema. ' );
        $article->setTitle( title: 'Pierwszy artykuł');
        $article->setDateAdded( dateAdded: new DateTime('11.11.2022'));
        
        $image1 = new Image();
        $image1->setPath('img1.jpg');
        $image1->setTitle('Title 1');
        $image1->setTitle('Alt 1');
        $article->addImage($image1);
        $manager->persist($image1);
        
        $image2 = new Image();
        $image2->setPath('img2.png');
        $image2->setTitle('Title 2');
        $image2->setTitle('Alt 2');
        $article->addImage($image2);
        $manager->persist($image2);
        
        $manager->persist($article);


        
        $article2 = new Article();
        $article2->setContent( content: 'Caffeine, so body whipped crema redeye viennese. Affogato coffee aromatic, grounds, aged blue mountain shop black latte that. Strong in fair trade pumpkin spice espresso extraction mazagran. Coffee in, siphon aromatic, galão aromatic cinnamon blue mountain cortado.' );
        $article2->setTitle( title: 'Pierwszy artykuł');
        $article2->setDateAdded( dateAdded: new DateTime('13.12.2022'));

        $image3 = new Image();
        $image3->setPath('img3.jpg');
        $image3->setTitle('Title 3');
        $image3->setTitle('Alt 3');
        $article->addImage($image3);
        $manager->persist($image3);
        
        $image4 = new Image();
        $image4->setPath('img4.jpg');
        $image4->setTitle('Title 4');
        $image4->setTitle('Alt 4');
        $article->addImage($image4);
        $manager->persist($image4);

        $image5 = new Image();
        $image5->setPath('img5.jpg');
        $image5->setTitle('Title 5');
        $image5->setTitle('Alt 5');
        $article->addImage($image5);
        $manager->persist($image5);

        $manager->persist($article2);



        $article3 = new Article();
        $article3->setContent( content: 'Spoon, dripper iced, galão arabica con panna froth roast steamed variety redeye. Blue mountain lungo white extra , shop, coffee mug white crema plunger pot. Skinny, coffee fair trade, blue mountain, cinnamon aftertaste flavour steamed froth crema that cappuccino.' );
        $article3->setTitle( title: 'Pierwszy artykuł');
        $article3->setDateAdded( dateAdded: new DateTime('13.12.2023'));
        
        $image6 = new Image();
        $image6->setPath('img6.jpg');
        $image6->setTitle('Title 6');
        $image6->setTitle('Alt 6');
        $article->addImage($image6);
        $manager->persist($image6);

        $image7 = new Image();
        $image7->setPath('img7.jpg');
        $image7->setTitle('Title 7');
        $image7->setTitle('Alt 7');
        $article->addImage($image7);
        $manager->persist($image7);

        $manager->persist($article3);


        $infoAboutMe = new InformationAboutMe(
            key: 'Imię',
            value: 'Patryk'
        );
        $manager->persist($infoAboutMe);

        $infoAboutMe2 = new InformationAboutMe(
            key: 'Nazwisko',
            value: 'Testowe'
        );
        $manager->persist($infoAboutMe2);

        $infoAboutMe3 = new InformationAboutMe(
            key: 'Informacja',
            value: 'Programista PHP'
        );
        $manager->persist($infoAboutMe3);


        
        $manager->flush();
    }
}
