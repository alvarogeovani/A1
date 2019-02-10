<?php
return [
    'service_manager' => [
        'factories' => [
            \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdResource::class => \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpcach\TpcachResource::class => \Cuentasporpagar\V1\Rest\Tpcach\TpcachResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdResource::class => \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphResource::class => \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpResource::class => \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpResource::class => \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tppers\TppersResource::class => \Cuentasporpagar\V1\Rest\Tppers\TppersResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tpprov\TpprovResource::class => \Cuentasporpagar\V1\Rest\Tpprov\TpprovResourceFactory::class,
            \Cuentasporpagar\V1\Rest\Tptran\TptranResource::class => \Cuentasporpagar\V1\Rest\Tptran\TptranResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'cuentasporpagar.rest.tpcacd' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpcacd[/:tpcacd_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpcacd\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpcach' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpcach[/:tpcach_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpcach\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpcxpd' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpcxpd[/:tpcxpd_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpcxpd\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpcxph' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpcxph[/:tpcxph_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpcxph\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpecxp' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpecxp[/:tpecxp_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpecxp\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpfngp' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpfngp[/:tpfngp_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpfngp\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tppers' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tppers[/:tppers_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tppers\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tpprov' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tpprov[/:tpprov_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tpprov\\Controller',
                    ],
                ],
            ],
            'cuentasporpagar.rest.tptran' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tptran[/:tptran_id]',
                    'defaults' => [
                        'controller' => 'Cuentasporpagar\\V1\\Rest\\Tptran\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'cuentasporpagar.rest.tpcacd',
            1 => 'cuentasporpagar.rest.tpcach',
            2 => 'cuentasporpagar.rest.tpcxpd',
            3 => 'cuentasporpagar.rest.tpcxph',
            4 => 'cuentasporpagar.rest.tpecxp',
            5 => 'cuentasporpagar.rest.tpfngp',
            6 => 'cuentasporpagar.rest.tppers',
            7 => 'cuentasporpagar.rest.tpprov',
            8 => 'cuentasporpagar.rest.tptran',
        ],
    ],
    'zf-rest' => [
        'Cuentasporpagar\\V1\\Rest\\Tpcacd\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdResource::class,
            'route_name' => 'cuentasporpagar.rest.tpcacd',
            'route_identifier_name' => 'tpcacd_id',
            'collection_name' => 'tpcacd',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdCollection::class,
            'service_name' => 'Tpcacd',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpcach\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpcach\TpcachResource::class,
            'route_name' => 'cuentasporpagar.rest.tpcach',
            'route_identifier_name' => 'tpcach_id',
            'collection_name' => 'tpcach',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpcach\TpcachEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpcach\TpcachCollection::class,
            'service_name' => 'Tpcach',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpcxpd\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdResource::class,
            'route_name' => 'cuentasporpagar.rest.tpcxpd',
            'route_identifier_name' => 'tpcxpd_id',
            'collection_name' => 'tpcxpd',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdCollection::class,
            'service_name' => 'Tpcxpd',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpcxph\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphResource::class,
            'route_name' => 'cuentasporpagar.rest.tpcxph',
            'route_identifier_name' => 'tpcxph_id',
            'collection_name' => 'tpcxph',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphCollection::class,
            'service_name' => 'Tpcxph',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpecxp\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpResource::class,
            'route_name' => 'cuentasporpagar.rest.tpecxp',
            'route_identifier_name' => 'tpecxp_id',
            'collection_name' => 'tpecxp',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpCollection::class,
            'service_name' => 'Tpecxp',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpfngp\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpResource::class,
            'route_name' => 'cuentasporpagar.rest.tpfngp',
            'route_identifier_name' => 'tpfngp_id',
            'collection_name' => 'tpfngp',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpCollection::class,
            'service_name' => 'Tpfngp',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tppers\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tppers\TppersResource::class,
            'route_name' => 'cuentasporpagar.rest.tppers',
            'route_identifier_name' => 'tppers_id',
            'collection_name' => 'tppers',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tppers\TppersEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tppers\TppersCollection::class,
            'service_name' => 'Tppers',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tpprov\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tpprov\TpprovResource::class,
            'route_name' => 'cuentasporpagar.rest.tpprov',
            'route_identifier_name' => 'tpprov_id',
            'collection_name' => 'tpprov',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tpprov\TpprovEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tpprov\TpprovCollection::class,
            'service_name' => 'Tpprov',
        ],
        'Cuentasporpagar\\V1\\Rest\\Tptran\\Controller' => [
            'listener' => \Cuentasporpagar\V1\Rest\Tptran\TptranResource::class,
            'route_name' => 'cuentasporpagar.rest.tptran',
            'route_identifier_name' => 'tptran_id',
            'collection_name' => 'tptran',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \Cuentasporpagar\V1\Rest\Tptran\TptranEntity::class,
            'collection_class' => \Cuentasporpagar\V1\Rest\Tptran\TptranCollection::class,
            'service_name' => 'Tptran',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Cuentasporpagar\\V1\\Rest\\Tpcacd\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpcach\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpcxpd\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpcxph\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpecxp\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpfngp\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tppers\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tpprov\\Controller' => 'HalJson',
            'Cuentasporpagar\\V1\\Rest\\Tptran\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Cuentasporpagar\\V1\\Rest\\Tpcacd\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcach\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcxpd\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcxph\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpecxp\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpfngp\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tppers\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpprov\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tptran\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Cuentasporpagar\\V1\\Rest\\Tpcacd\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcach\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcxpd\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpcxph\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpecxp\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpfngp\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tppers\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tpprov\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
            'Cuentasporpagar\\V1\\Rest\\Tptran\\Controller' => [
                0 => 'application/vnd.cuentasporpagar.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcacd',
                'route_identifier_name' => 'tpcacd_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpcacd\TpcacdCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcacd',
                'route_identifier_name' => 'tpcacd_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpcach\TpcachEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcach',
                'route_identifier_name' => 'tpcach_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpcach\TpcachCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcach',
                'route_identifier_name' => 'tpcach_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcxpd',
                'route_identifier_name' => 'tpcxpd_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpcxpd\TpcxpdCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcxpd',
                'route_identifier_name' => 'tpcxpd_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcxph',
                'route_identifier_name' => 'tpcxph_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpcxph\TpcxphCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpcxph',
                'route_identifier_name' => 'tpcxph_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpecxp',
                'route_identifier_name' => 'tpecxp_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpecxp\TpecxpCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpecxp',
                'route_identifier_name' => 'tpecxp_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpfngp',
                'route_identifier_name' => 'tpfngp_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpfngp\TpfngpCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpfngp',
                'route_identifier_name' => 'tpfngp_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tppers\TppersEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tppers',
                'route_identifier_name' => 'tppers_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tppers\TppersCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tppers',
                'route_identifier_name' => 'tppers_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tpprov\TpprovEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpprov',
                'route_identifier_name' => 'tpprov_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tpprov\TpprovCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tpprov',
                'route_identifier_name' => 'tpprov_id',
                'is_collection' => true,
            ],
            \Cuentasporpagar\V1\Rest\Tptran\TptranEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tptran',
                'route_identifier_name' => 'tptran_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Cuentasporpagar\V1\Rest\Tptran\TptranCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'cuentasporpagar.rest.tptran',
                'route_identifier_name' => 'tptran_id',
                'is_collection' => true,
            ],
        ],
    ],
];
