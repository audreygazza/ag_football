<?php

namespace App\DataFixtures;

use App\Entity\Equipment;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EquipmentFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);


        $equipment1 = new Equipment();
        $equipment1 -> setDesignation("Chasuble")
                -> setDescription("Vêtement que chaque joueur d’une des deux équipes enfile par-dessus son maillot dans le cas où la tenue des deux équipes se ressemble trop, afin de bien distinguer les équipes.")
                -> setBrand('Decathlon')
                -> setPrice(2.50)
                -> setQuantity(15);

        $manager->persist($equipment1);

        $equipment2 = new Equipment();
        $equipment2 -> setDesignation("Ballon")
                -> setDescription("Ballon de football avec un poids de 420 grammes (Taille 5).")
                -> setBrand('Kipsta')
                -> setPrice(10.00)
                -> setQuantity(5);

        $manager->persist($equipment2);

        $equipment3 = new Equipment();
        $equipment3 -> setDesignation("Plots")
                -> setDescription("Conçu pour le balisage de vos terrains de jeux et entraînements sportifs ainsi que la réalisation de parcours diversifiés.")
                -> setBrand('Decathlon')
                -> setPrice(3.40)
                -> setQuantity(10);

        $manager->persist($equipment3);

        $equipment4 = new Equipment();
        $equipment4 -> setDesignation("Barre")
                -> setDescription("Conçu pour matérialiser des parcours ou obstacles pour la pratique ludique du sport.")
                -> setBrand('Decathlon')
                -> setPrice(2.12)
                -> setQuantity(7);

        $manager->persist($equipment4);

        $equipment5 = new Equipment();
        $equipment5 -> setDesignation("Maillot")
                -> setDescription("Maillot de football F500 pour entraînements et matchs")
                -> setBrand('Kipsta')
                -> setPrice(8.56)
                -> setQuantity(15);

        $manager->persist($equipment5);

        $equipment6 = new Equipment();
        $equipment6 -> setDesignation("Mini-plots")
                -> setDescription("Pour délimiter une zone de jeu sur n'importe quel terrain.")
                -> setBrand('Kipsta')
                -> setPrice(7.00)
                -> setQuantity(8);

        $manager->persist($equipment6);

        $equipment7 = new Equipment();
        $equipment7 -> setDesignation("Short")
                -> setDescription("Short de football F500 pour entraînements et matchs")
                -> setBrand('Decathlon')
                -> setPrice(4.20)
                -> setQuantity(15);

        $manager->persist($equipment7);

        $equipment8 = new Equipment();
        $equipment8 -> setDesignation("Sifflet")
                -> setDescription("Sifflet en plastique qui permet aux entraîneurs et arbitres d'organiser et d'animer le jeu, lors des matchs et entraînements.")
                -> setBrand('Decathlon')
                -> setPrice(1.60)
                -> setQuantity(2);

        $manager->persist($equipment8);



        $manager->flush();
    }
}
