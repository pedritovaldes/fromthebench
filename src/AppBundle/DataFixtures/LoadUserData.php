<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 24/08/17
 * Time: 11:47
 */

namespace AppBundle\DataFixtures;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;

class LoadUserData extends AbstractFixture implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        //Vamos a crear unos cuantos usuarios de prueba
        $user1 = new User();
        $user1->setNombre('Pedro');
        $user1->setEmail('prueba1@prueba.com');
        $user1->setPassword('12345');
        $manager->persist($user1);

        $user1 = new User();
        $user1->setNombre('Pedro');
        $user1->setEmail('prueba2@prueba.com');
        $user1->setPassword('123456789');
        $manager->persist($user1);

        $manager->flush();
    }
}