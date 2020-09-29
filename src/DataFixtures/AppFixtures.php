<?php

namespace App\DataFixtures;

use App\Entity\City;
use App\Entity\Color;
use App\Entity\Brand;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $cities =[
            "Santa Maria",
            "Porto Alegre",
            "Alegrete",
            "Santa Cruz",
            "Sarandi",
            "Caxias",
            "Rio Grande"
        ];
        $colors = [
            "Azul",
            "Preto",
            "Branco",
            "Vermelho",
            "Prata Metalico",
            "Preto Metalico",
            "Fume"
        ];
        $brands = [
            "Toyota",
            "Honda",
            "Ford",
            "Fiat",
            "Peugeout",
            "Ferrari",
            "Renault"
        ];

        foreach($colors as $color){
            $newColor = new Color();
            $newColor->setName($color);
            $manager->persist($newColor);
        }
        foreach ($cities as $city) {
            $newCity = new City();
            $newCity->setName($city);
            $manager->persist($newCity);
        }
        foreach($brands as $brand){
            $newBrand = new Brand();
            $newBrand->setName($brand);
            $manager->persist($newBrand);
        }
        $manager->flush();
    }
}
