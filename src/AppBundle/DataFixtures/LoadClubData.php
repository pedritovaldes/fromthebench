<?php

namespace AppBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Club;

class LoadClubData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Vamos a crear unos cuantos clubs de prueba
        $club1 = new Club();
        $club1->setNombre('FromTheBench');
        $club1->setManager('Pablo');
        $club1->setDescripcion('Prueba de club 1');
        $manager->persist($club1);

        $club2 = new Club();
        $club2->setNombre('Real Madrid');
        $club2->setManager('Zidane');
        $club2->setDescripcion('Hala Madrid');
        $manager->persist($club2);

        $club3 = new Club();
        $club3->setNombre('FC Barcelona');
        $club3->setManager('Valverde');
        $club3->setDescripcion('Barsa');
        $manager->persist($club3);

        $club4 = new Club();
        $club4->setNombre('Sevilla FC');
        $club4->setManager('Berizzo');
        $club4->setDescripcion('Vamos mi sevilla');
        $manager->persist($club4);

        $club5 = new Club();
        $club5->setNombre('Valencia CF');
        $club5->setManager('Marcelino García');
        $club5->setDescripcion('Amunt Valencia');
        $manager->persist($club5);

        $club6 = new Club();
        $club6->setNombre('Atlético de Madrid');
        $club6->setManager('Cholo Simeone');
        $club6->setDescripcion('Aupa Atleti');
        $manager->persist($club6);

        $club7 = new Club();
        $club7->setNombre('Real Sociedad');
        $club7->setManager('Unzué');
        $club7->setDescripcion('Aupa Reala');
        $manager->persist($club7);

        $club8 = new Club();
        $club8->setNombre('Español de Barcelona');
        $club8->setManager('Quique S Flores');
        $club8->setDescripcion('Pericos!');
        $manager->persist($club8);

        $manager->flush();
    }
}