<?php
return [
    'router' => [
        'routes' => [],
    ],
    'zf-versioning' => [
        'uri' => [],
    ],
    'zf-rest' => [],
    'zf-content-negotiation' => [
        'controllers' => [],
        'accept_whitelist' => [],
        'content_type_whitelist' => [],
    ],
    'zf-hal' => [
        'metadata_map' => [],
    ],
    'zf-apigility' => [
        'db-connected' => [],
    ],
    'zf-content-validation' => [],
    'input_filter_specs' => [
        'Seleccion\\V1\\Rest\\Ayu01\\Validator' => [
            0 => [
                'name' => 'extencion',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => null,
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'idpk',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            2 => [
                'name' => 'rmosecu',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            3 => [
                'name' => 'rmoparm',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            4 => [
                'name' => 'rnomopc',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            5 => [
                'name' => 'rnoalias',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            6 => [
                'name' => 'rdesopc',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            7 => [
                'name' => 'rmetext',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            8 => [
                'name' => 'rmealia',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            9 => [
                'name' => 'rmecome',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            10 => [
                'name' => 'rordopc',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
            11 => [
                'name' => 'rmodeex',
                'required' => false,
                'filters' => [],
                'validators' => [],
            ],
        ],
    ],
];
