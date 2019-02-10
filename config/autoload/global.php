<?php
return [
    'zf-content-negotiation' => [
        'selectors' => [],
    ],
    'db' => [
        'driver' => 'pdo_pgsql',
        'database' => 'A1',
        'hostname' => 'localhost',
        'adapters' => [
            'pgA1' => [],
        ],
    ],
    'zf-mvc-auth' => [
        'authentication' => [
            'map' => [
                'Seguridad\\V1' => 'a1authentication',
            ],
        ],
    ],
];
