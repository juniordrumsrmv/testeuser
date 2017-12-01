<?php

namespace User\InputFilter;

use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\Validator\NotEmpty;

class UserInputFilter extends InputFilter
{

    public function __construct()
    {
        $this->add([
            'name' => 'user_key',
            'required' => true,
            'allow_empty' => true
        ]);

        $this->add([
            'name' => 'username',
            'required' => true,
            'filters' => [
                ['name' => StringTrim::class],
                ['name' => StripTags::class]
            ],
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

        $this->add([
            'name' => 'user_fullname',
            'required' => true,
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

        $this->add([
            'name' => 'password',
            'required' => true,
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

        $this->add([
            'name' => 'user_type',
            'required' => true,
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

        $this->add([
            'name' => 'user_email',
            'required' => true,
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

        $this->add([
            'name' => 'user_status',
            'required' => true,
            'validators' => [
                [
                    'name' => NotEmpty::class,
                    'options' => [
                        'messages' => [
                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
                        ]
                    ]
                ]
            ]
        ]);

//        $this->add([
//            'name' => 'user_level',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);

//        $this->add([
//            'name' => 'user_address',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_number',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_comple',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_neig',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_city',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_state',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_country',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);
//
//        $this->add([
//            'name' => 'user_zip',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);

//        $this->add([
//            'name' => 'user_phone_area_code',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);

//        $this->add([
//            'name' => 'user_phone_number',
//            'required' => true,
//            'validators' => [
//                [
//                    'name' => NotEmpty::class,
//                    'options' => [
//                        'messages' => [
//                            NotEmpty::IS_EMPTY => 'O campo é requerido!'
//                        ]
//                    ]
//                ]
//            ]
//        ]);

    }


}