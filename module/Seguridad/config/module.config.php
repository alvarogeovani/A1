<?php
return [
    'service_manager' => [
        'factories' => [
            \Seguridad\V1\Rest\Trusua\TrusuaResource::class => \Seguridad\V1\Rest\Trusua\TrusuaResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'seguridad.rest.trusua' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/trusua[/:trusua_id]',
                    'defaults' => [
                        'controller' => 'Seguridad\\V1\\Rest\\Trusua\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'seguridad.rest.trusua',
        ],
    ],
    'zf-rest' => [
        'Seguridad\\V1\\Rest\\Trusua\\Controller' => [
            'listener' => \Seguridad\V1\Rest\Trusua\TrusuaResource::class,
            'route_name' => 'seguridad.rest.trusua',
            'route_identifier_name' => 'trusua_id',
            'collection_name' => 'trusua',
            'entity_http_methods' => [
                0 => 'GET',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'DELETE',
                2 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Seguridad\V1\Rest\Trusua\TrusuaEntity::class,
            'collection_class' => \Seguridad\V1\Rest\Trusua\TrusuaCollection::class,
            'service_name' => 'Trusua',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Seguridad\\V1\\Rest\\Trusua\\Controller' => 'Json',
        ],
        'accept_whitelist' => [
            'Seguridad\\V1\\Rest\\Trusua\\Controller' => [
                0 => 'application/vnd.seguridad.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Seguridad\\V1\\Rest\\Trusua\\Controller' => [
                0 => 'application/vnd.seguridad.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Seguridad\V1\Rest\Trusua\TrusuaEntity::class => [
                'entity_identifier_name' => 'trusua',
                'route_name' => 'seguridad.rest.trusua',
                'route_identifier_name' => 'trusua_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Seguridad\V1\Rest\Trusua\TrusuaCollection::class => [
                'entity_identifier_name' => 'trusua',
                'route_name' => 'seguridad.rest.trusua',
                'route_identifier_name' => 'trusua_id',
                'is_collection' => true,
            ],
        ],
    ],
    'zf-content-validation' => [
        'Seguridad\\V1\\Rest\\Trusua\\Controller' => [
            'input_filter' => 'Seguridad\\V1\\Rest\\Trusua\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Seguridad\\V1\\Rest\\Trusua\\Validator' => [
            0 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'russecu',
                'description' => 'Estos datos se ingresan en la Opcion: Usuarios del Sistema',
                'field_type' => 'integer',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'rpesecu',
                'description' => 'Estos datos se ingresan en la Opcion: Perfiles de Usuarios',
                'field_type' => 'integer',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'rusucod',
                'description' => 'Nombre de Usuario',
                'field_type' => 'string',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'description' => 'Clave de Usuario',
                'name' => 'rusucve',
                'field_type' => 'string',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'rusunom',
                'description' => 'Nombre de Usuario',
                'field_type' => 'string',
            ],
            5 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'description' => 'E-mail del Usuario',
                'name' => 'rusumai',
                'field_type' => 'string',
            ],
            6 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'rusuest',
                'description' => 'Estado del Usuario',
                'field_type' => 'string',
            ],
            7 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'description' => 'Fecha de Registro del Usuario',
                'name' => 'rusufec',
                'field_type' => 'date',
            ],
            8 => [
                'required' => false,
                'validators' => [],
                'filters' => [],
                'name' => 'rusucad',
                'description' => 'Fecha Caducidad del Usuario',
                'field_type' => 'date',
            ],
        ],
    ],
    'zf-mvc-auth' => [
        'authorization' => [
            'Seguridad\\V1\\Rest\\Trusua\\Controller' => [
                'collection' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
                'entity' => [
                    'GET' => false,
                    'POST' => false,
                    'PUT' => false,
                    'PATCH' => false,
                    'DELETE' => false,
                ],
            ],
        ],
    ],
];
