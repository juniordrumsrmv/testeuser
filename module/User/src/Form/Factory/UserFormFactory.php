<?php

namespace User\Form\Factory;

use Doctrine\ORM\EntityManager;
use User\Entity\User;
use User\Entity\UserType;
use User\Form\UserForm;
use User\InputFilter\UserInputFilter;
use Interop\Container\ContainerInterface;
use Zend\Hydrator\ClassMethods;

class UserFormFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $inputFilter = new UserInputFilter();
        $entityManager = $container->get(EntityManager::class);
        $form = new UserForm($entityManager);
        $form->setInputFilter($inputFilter);
        $form->setHydrator(new ClassMethods());
        $form->setObject(new User());
        return $form;
    }


}