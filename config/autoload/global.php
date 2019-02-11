<?php
return array(
    'zf-content-negotiation' => array(
        'selectors' => array(),
    ),
    'db' => array(
        'driver' => 'pdo_pgsql',
        'database' => 'A1',
        'hostname' => 'localhost',
        'adapters' => array(
            'pgA1' => array(),
        ),
    ),
    'zf-mvc-auth' => array(
        'authentication' => array(
            'map' => array(
                'Seguridad\\V1' => 'a1auth',
            ),
        ),
    ),
);
