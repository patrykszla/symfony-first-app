<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $article = new Article();
        $article->setContent( content: 'Macchiato, milk skinny sugar id, sit caffeine grounds fair trade that. Extraction blue mountain acerbic caffeine extra  that bar  instant bar  robust id lungo. Instant espresso wings, a, con panna lungo that acerbic café au lait. Ristretto, cinnamon half and half macchiato and frappuccino cinnamon con panna turkish.
        Blue mountain, fair trade, single shot decaffeinated carajillo cappuccino a barista. Affogato variety, flavour sugar extraction percolator robusta. Black acerbic, blue mountain that, qui, roast id turkish café au lait roast aroma half and half. Cinnamon extraction breve coffee dark, coffee plunger pot dripper so crema. ' );

        $article->setTitle( title: 'Pierwszy artykuł');

        $manager->persist($article);
        
        $article2 = new Article();
        $article2->setContent( content: 'Caffeine, so body whipped crema redeye viennese. Affogato coffee aromatic, grounds, aged blue mountain shop black latte that. Strong in fair trade pumpkin spice espresso extraction mazagran. Coffee in, siphon aromatic, galão aromatic cinnamon blue mountain cortado.' );
        $article2->setTitle( title: 'Pierwszy artykuł');
        $manager->persist($article2);

        $article3 = new Article();
        $article3->setContent( content: 'Spoon, dripper iced, galão arabica con panna froth roast steamed variety redeye. Blue mountain lungo white extra , shop, coffee mug white crema plunger pot. Skinny, coffee fair trade, blue mountain, cinnamon aftertaste flavour steamed froth crema that cappuccino.' );
        $article3->setTitle( title: 'Pierwszy artykuł');

        $manager->persist($article3);
        
        $manager->flush();
    }
}
