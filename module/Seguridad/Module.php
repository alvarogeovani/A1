<?php

namespace Seguridad;

use ZF\Apigility\Provider\ApigilityProviderInterface;

class Module implements ApigilityProviderInterface {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig() {
        return [
            'factories' => [
                'TrusuaTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get(AdapterInterface::class);
                    return new BaseRepository(new Trusua(), $dbAdapter);
                },
                ITrusuaRepository::class => function($sm) {
                    $tableGateway = $sm->get('TrusuaTableGateway');
                    return new TrusuaRepository($tableGateway);
                },
            ],
        ];
    }

    public function getAutoloaderConfig() {
        return [
            'ZF\Apigility\Autoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src',
                ],
            ],
        ];
    }

}
