<?php

namespace User;

use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Zend\Router\Http\Literal;
use User\Controller;

return [
    'router' => [
        'routes' => [
            'login' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/auth/login',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'login',
                    ],
                ],
            ],
            'logout' => [
                'type' => Literal::class,
                'options' => [
                    'route'    => '/auth/logout',
                    'defaults' => [
                        'controller' => Controller\AuthController::class,
                        'action'     => 'logout',
                    ],
                ],
            ],
            'admin' => [
                'type' => Literal::class,
                'options' => [
                    'route' => '/admin'
                ],
                'may_terminate' => false,
                'child_routes' => [
                    'users' => [
                        'type' => 'segment',
                        'options' => [
                            'route' => '/users[/:action[/:id]]',
                            'constraints' => [
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'id' => '[0-9]+',
                            ],
                            'defaults' => [
                                'controller' => Controller\UserController::class,
                                'action' => 'index'
                            ]
                        ]
                    ],
                ]
            ],
        ],
    ],
    'view_manager' => [
        'template_path_stack' => [
            'user' => __DIR__ . "/../view"
        ]
    ],
    'doctrine' => [
        'driver' => [
            'User_driver' => [
                'class' => AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ]
            ],
            'orm_default' => [
                'drivers' => [
                    'User\Entity' => 'User_driver'
                ]
            ]
        ],
        'fixtures' => [
            'UserFixture' => __DIR__ . '/../src/Fixture',
        ]
    ]
];