<?php

namespace User\Fixture;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use User\Entity\User;

class UserFixture implements FixtureInterface {

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUserKey(0)
            ->setUserType(1)
            ->setUsername("37844582898")
            ->setUserFullname("Bianou Oliveira")
            ->setPassword(password_hash('123456',PASSWORD_DEFAULT))
            ->setUserStatus(1)
            ->setUserLevel(1);
        $manager->persist($user);
        $manager->flush();
    }
}