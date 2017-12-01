<?php

namespace User\Form;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use DoctrineModule\Form\Element\ObjectSelect;
use User\Entity\Country;
use User\Entity\State;
use User\Entity\UserLevel;
use User\Entity\UserStatus;
use User\Entity\UserType;
use Zend\Form\Form;
use Zend\Form\Element;
use DoctrineModule\Persistence\ObjectManagerAwareInterface;
use Doctrine\Common\Persistence\ObjectManager;

class UserForm extends Form implements ObjectManagerAwareInterface
{

    protected $objectManager;
    /**
     * @var EntityRepository
     */
    private $userTypeRepository;

    public function __construct(EntityManager $objectManager, $name=null)
    {
        parent::__construct('user');
        $this->objectManager = $objectManager;
        $this->init();
    }

    public function init()
    {

        $this->add([
           'name' => 'user_key',
            'type' => Element\Hidden::class
        ]);

        $this->add([
            'name' => 'user_type',
            'type' => Element\Select::class,
            'options' => [
                'label'=> 'Tipo de Usuário',
            ]
        ]);

        $this->add([
            'name' => 'username',
            'type' => Element\Number::class,
            'options' => [
                'label'=> 'CPF'
            ]
        ]);

        $this->add([
            'name' => 'user_fullname',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'Nome'
            ]
        ]);

        $this->add([
            'name' => 'user_email',
            'type' => Element\Email::class,
            'options' => [
                'label'=> 'Email'
            ]
        ]);

        $this->add([
            'name' => 'password',
            'type' => Element\Password::class,
            'options' => [
                'label'=> 'Senha'
            ]
        ]);

        $this->add([
            'name' => 'user_address',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'Endereço'
            ]
        ]);

        $this->add([
            'name' => 'user_number',
            'type' => Element\Number::class,
            'options' => [
                'label'=> 'Número'
            ]
        ]);

        $this->add([
            'name' => 'user_comple',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'Complemento'
            ]
        ]);

        $this->add([
            'name' => 'user_neig',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'Bairro'
            ]
        ]);

        $this->add([
            'name' => 'user_city',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'Cidade'
            ]
        ]);

        $this->add([
            'name' => 'user_zip',
            'type' => Element\Number::class,
            'options' => [
                'label'=> 'CEP'
            ]
        ]);

        $this->add([
            'name' => 'user_phone_area_code',
            'type' => Element\Text::class,
            'options' => [
                'label'=> 'DDD'
            ]
        ]);

        $this->add([
            'name' => 'user_phone_number',
            'type' => Element\Tel::class,
            'options' => [
                'label'=> 'Telefone'
            ]
        ]);

        $this->add([
            'name' => 'submit',
            'type' => Element\Submit::class,
            'attributes' => [
                'value'=> 'Go',
                'id'=>'submitbutton'
            ]
        ]);

        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'user_type',
            'options' => [
                'object_manager' => $this->objectManager,
                'target_class'   => UserType::class,
                'property'       => 'nameType',
                'label' => 'Categoria'
            ],
        ]);

        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'user_level',
            'options' => [
                'object_manager' => $this->objectManager,
                'target_class'   => UserLevel::class,
                'property'       => 'nameLevel',
                'label' => 'Nível(Alunos)'
            ],
        ]);

        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'user_status',
            'options' => [
                'object_manager' => $this->objectManager,
                'target_class'   => UserStatus::class,
                'property'       => 'nameStatus',
                'label' => 'Situação'
            ],
        ]);

        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'user_state',
            'options' => [
                'object_manager' => $this->objectManager,
                'target_class'   => State::class,
                'property'       => 'acronym',
                'label' => 'UF'
            ],
        ]);

        $this->add([
            'type' => ObjectSelect::class,
            'name' => 'user_country',
            'options' => [
                'object_manager' => $this->objectManager,
                'target_class'   => Country::class,
                'property'       => 'countryName',
                'label' => 'País'
            ],
        ]);
    }

    /**
     * Set the object manager
     *
     * @param ObjectManager $objectManager
     */
    public function setObjectManager(ObjectManager $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
     * Get the object manager
     *
     * @return ObjectManager
     */
    public function getObjectManager()
    {
        return $this->objectManager;
    }
}