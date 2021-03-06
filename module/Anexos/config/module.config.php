<?php
return [
    'service_manager' => [
        'factories' => [
            \Anexos\V1\Rest\Taafyf\TaafyfResource::class => \Anexos\V1\Rest\Taafyf\TaafyfResourceFactory::class,
            \Anexos\V1\Rest\Tacisp\TacispResource::class => \Anexos\V1\Rest\Tacisp\TacispResourceFactory::class,
            \Anexos\V1\Rest\Tacrid\TacridResource::class => \Anexos\V1\Rest\Tacrid\TacridResourceFactory::class,
            \Anexos\V1\Rest\Tacrih\TacrihResource::class => \Anexos\V1\Rest\Tacrih\TacrihResourceFactory::class,
            \Anexos\V1\Rest\Taeoie\TaeoieResource::class => \Anexos\V1\Rest\Taeoie\TaeoieResourceFactory::class,
            \Anexos\V1\Rest\Taidin\TaidinResource::class => \Anexos\V1\Rest\Taidin\TaidinResourceFactory::class,
            \Anexos\V1\Rest\Tapsri\TapsriResource::class => \Anexos\V1\Rest\Tapsri\TapsriResourceFactory::class,
            \Anexos\V1\Rest\Tareca\TarecaResource::class => \Anexos\V1\Rest\Tareca\TarecaResourceFactory::class,
            \Anexos\V1\Rest\Tarprf\TarprfResource::class => \Anexos\V1\Rest\Tarprf\TarprfResourceFactory::class,
            \Anexos\V1\Rest\Tatcir\TatcirResource::class => \Anexos\V1\Rest\Tatcir\TatcirResourceFactory::class,
            \Anexos\V1\Rest\Tavisp\TavispResource::class => \Anexos\V1\Rest\Tavisp\TavispResourceFactory::class,
            \Anexos\V1\Rest\Tavsri\TavsriResource::class => \Anexos\V1\Rest\Tavsri\TavsriResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'anexos.rest.taafyf' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/taafyf[/:taafyf_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Taafyf\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tacisp' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tacisp[/:tacisp_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tacisp\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tacrid' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tacrid[/:tacrid_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tacrid\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tacrih' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tacrih[/:tacrih_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tacrih\\Controller',
                    ],
                ],
            ],
            'anexos.rest.taeoie' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/taeoie[/:taeoie_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Taeoie\\Controller',
                    ],
                ],
            ],
            'anexos.rest.taidin' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/taidin[/:taidin_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Taidin\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tapsri' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tapsri[/:tapsri_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tapsri\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tareca' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tareca[/:tareca_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tareca\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tarprf' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tarprf[/:tarprf_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tarprf\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tatcir' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tatcir[/:tatcir_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tatcir\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tavisp' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tavisp[/:tavisp_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tavisp\\Controller',
                    ],
                ],
            ],
            'anexos.rest.tavsri' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/tavsri[/:tavsri_id]',
                    'defaults' => [
                        'controller' => 'Anexos\\V1\\Rest\\Tavsri\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'anexos.rest.taafyf',
            1 => 'anexos.rest.tacisp',
            2 => 'anexos.rest.tacrid',
            3 => 'anexos.rest.tacrih',
            4 => 'anexos.rest.taeoie',
            5 => 'anexos.rest.taidin',
            6 => 'anexos.rest.tapsri',
            7 => 'anexos.rest.tareca',
            8 => 'anexos.rest.tarprf',
            9 => 'anexos.rest.tatcir',
            10 => 'anexos.rest.tavisp',
            11 => 'anexos.rest.tavsri',
        ],
    ],
    'zf-rest' => [
        'Anexos\\V1\\Rest\\Taafyf\\Controller' => [
            'listener' => \Anexos\V1\Rest\Taafyf\TaafyfResource::class,
            'route_name' => 'anexos.rest.taafyf',
            'route_identifier_name' => 'taafyf_id',
            'collection_name' => 'taafyf',
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
            'entity_class' => \Anexos\V1\Rest\Taafyf\TaafyfEntity::class,
            'collection_class' => \Anexos\V1\Rest\Taafyf\TaafyfCollection::class,
            'service_name' => 'Taafyf',
        ],
        'Anexos\\V1\\Rest\\Tacisp\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tacisp\TacispResource::class,
            'route_name' => 'anexos.rest.tacisp',
            'route_identifier_name' => 'tacisp_id',
            'collection_name' => 'tacisp',
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
            'entity_class' => \Anexos\V1\Rest\Tacisp\TacispEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tacisp\TacispCollection::class,
            'service_name' => 'Tacisp',
        ],
        'Anexos\\V1\\Rest\\Tacrid\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tacrid\TacridResource::class,
            'route_name' => 'anexos.rest.tacrid',
            'route_identifier_name' => 'tacrid_id',
            'collection_name' => 'tacrid',
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
            'entity_class' => \Anexos\V1\Rest\Tacrid\TacridEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tacrid\TacridCollection::class,
            'service_name' => 'Tacrid',
        ],
        'Anexos\\V1\\Rest\\Tacrih\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tacrih\TacrihResource::class,
            'route_name' => 'anexos.rest.tacrih',
            'route_identifier_name' => 'tacrih_id',
            'collection_name' => 'tacrih',
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
            'entity_class' => \Anexos\V1\Rest\Tacrih\TacrihEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tacrih\TacrihCollection::class,
            'service_name' => 'Tacrih',
        ],
        'Anexos\\V1\\Rest\\Taeoie\\Controller' => [
            'listener' => \Anexos\V1\Rest\Taeoie\TaeoieResource::class,
            'route_name' => 'anexos.rest.taeoie',
            'route_identifier_name' => 'taeoie_id',
            'collection_name' => 'taeoie',
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
            'entity_class' => \Anexos\V1\Rest\Taeoie\TaeoieEntity::class,
            'collection_class' => \Anexos\V1\Rest\Taeoie\TaeoieCollection::class,
            'service_name' => 'Taeoie',
        ],
        'Anexos\\V1\\Rest\\Taidin\\Controller' => [
            'listener' => \Anexos\V1\Rest\Taidin\TaidinResource::class,
            'route_name' => 'anexos.rest.taidin',
            'route_identifier_name' => 'taidin_id',
            'collection_name' => 'taidin',
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
            'entity_class' => \Anexos\V1\Rest\Taidin\TaidinEntity::class,
            'collection_class' => \Anexos\V1\Rest\Taidin\TaidinCollection::class,
            'service_name' => 'Taidin',
        ],
        'Anexos\\V1\\Rest\\Tapsri\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tapsri\TapsriResource::class,
            'route_name' => 'anexos.rest.tapsri',
            'route_identifier_name' => 'tapsri_id',
            'collection_name' => 'tapsri',
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
            'entity_class' => \Anexos\V1\Rest\Tapsri\TapsriEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tapsri\TapsriCollection::class,
            'service_name' => 'Tapsri',
        ],
        'Anexos\\V1\\Rest\\Tareca\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tareca\TarecaResource::class,
            'route_name' => 'anexos.rest.tareca',
            'route_identifier_name' => 'tareca_id',
            'collection_name' => 'tareca',
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
            'entity_class' => \Anexos\V1\Rest\Tareca\TarecaEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tareca\TarecaCollection::class,
            'service_name' => 'Tareca',
        ],
        'Anexos\\V1\\Rest\\Tarprf\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tarprf\TarprfResource::class,
            'route_name' => 'anexos.rest.tarprf',
            'route_identifier_name' => 'tarprf_id',
            'collection_name' => 'tarprf',
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
            'entity_class' => \Anexos\V1\Rest\Tarprf\TarprfEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tarprf\TarprfCollection::class,
            'service_name' => 'Tarprf',
        ],
        'Anexos\\V1\\Rest\\Tatcir\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tatcir\TatcirResource::class,
            'route_name' => 'anexos.rest.tatcir',
            'route_identifier_name' => 'tatcir_id',
            'collection_name' => 'tatcir',
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
            'entity_class' => \Anexos\V1\Rest\Tatcir\TatcirEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tatcir\TatcirCollection::class,
            'service_name' => 'Tatcir',
        ],
        'Anexos\\V1\\Rest\\Tavisp\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tavisp\TavispResource::class,
            'route_name' => 'anexos.rest.tavisp',
            'route_identifier_name' => 'tavisp_id',
            'collection_name' => 'tavisp',
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
            'entity_class' => \Anexos\V1\Rest\Tavisp\TavispEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tavisp\TavispCollection::class,
            'service_name' => 'Tavisp',
        ],
        'Anexos\\V1\\Rest\\Tavsri\\Controller' => [
            'listener' => \Anexos\V1\Rest\Tavsri\TavsriResource::class,
            'route_name' => 'anexos.rest.tavsri',
            'route_identifier_name' => 'tavsri_id',
            'collection_name' => 'tavsri',
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
            'entity_class' => \Anexos\V1\Rest\Tavsri\TavsriEntity::class,
            'collection_class' => \Anexos\V1\Rest\Tavsri\TavsriCollection::class,
            'service_name' => 'Tavsri',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'Anexos\\V1\\Rest\\Taafyf\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tacisp\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tacrid\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tacrih\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Taeoie\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Taidin\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tapsri\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tareca\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tarprf\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tatcir\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tavisp\\Controller' => 'HalJson',
            'Anexos\\V1\\Rest\\Tavsri\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Anexos\\V1\\Rest\\Taafyf\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacisp\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacrid\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacrih\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Taeoie\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Taidin\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tapsri\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tareca\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tarprf\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tatcir\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tavisp\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tavsri\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Anexos\\V1\\Rest\\Taafyf\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacisp\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacrid\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tacrih\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Taeoie\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Taidin\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tapsri\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tareca\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tarprf\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tatcir\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tavisp\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
            'Anexos\\V1\\Rest\\Tavsri\\Controller' => [
                0 => 'application/vnd.anexos.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \Anexos\V1\Rest\Taafyf\TaafyfEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taafyf',
                'route_identifier_name' => 'taafyf_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Taafyf\TaafyfCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taafyf',
                'route_identifier_name' => 'taafyf_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tacisp\TacispEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacisp',
                'route_identifier_name' => 'tacisp_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tacisp\TacispCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacisp',
                'route_identifier_name' => 'tacisp_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tacrid\TacridEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacrid',
                'route_identifier_name' => 'tacrid_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tacrid\TacridCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacrid',
                'route_identifier_name' => 'tacrid_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tacrih\TacrihEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacrih',
                'route_identifier_name' => 'tacrih_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tacrih\TacrihCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tacrih',
                'route_identifier_name' => 'tacrih_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Taeoie\TaeoieEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taeoie',
                'route_identifier_name' => 'taeoie_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Taeoie\TaeoieCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taeoie',
                'route_identifier_name' => 'taeoie_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Taidin\TaidinEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taidin',
                'route_identifier_name' => 'taidin_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Taidin\TaidinCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.taidin',
                'route_identifier_name' => 'taidin_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tapsri\TapsriEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tapsri',
                'route_identifier_name' => 'tapsri_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tapsri\TapsriCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tapsri',
                'route_identifier_name' => 'tapsri_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tareca\TarecaEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tareca',
                'route_identifier_name' => 'tareca_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tareca\TarecaCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tareca',
                'route_identifier_name' => 'tareca_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tarprf\TarprfEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tarprf',
                'route_identifier_name' => 'tarprf_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tarprf\TarprfCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tarprf',
                'route_identifier_name' => 'tarprf_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tatcir\TatcirEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tatcir',
                'route_identifier_name' => 'tatcir_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tatcir\TatcirCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tatcir',
                'route_identifier_name' => 'tatcir_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tavisp\TavispEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tavisp',
                'route_identifier_name' => 'tavisp_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tavisp\TavispCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tavisp',
                'route_identifier_name' => 'tavisp_id',
                'is_collection' => true,
            ],
            \Anexos\V1\Rest\Tavsri\TavsriEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tavsri',
                'route_identifier_name' => 'tavsri_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \Anexos\V1\Rest\Tavsri\TavsriCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'anexos.rest.tavsri',
                'route_identifier_name' => 'tavsri_id',
                'is_collection' => true,
            ],
        ],
    ],
];
