<?php

namespace User\Controller\Factory;

use User\Controller\UserController;
use User\Entity\User;
use User\Entity\UserLevel;
use User\Form\UserForm;
use Doctrine\ORM\EntityManager;
use Interop\Container\ContainerInterface;

class UserControllerFactory
{

    public function __invoke(ContainerInterface $container)
    {
        /** @var EntityManager $entityManager */
        $entityManager = $container->get(EntityManager::class);

        //Repositorios
        $userRepository = $entityManager->getRepository(User::class);

        $userForm = $container->get(UserForm::class);
        return new UserController(
            $entityManager,
            $userForm,
            $userRepository
        );
    }


}