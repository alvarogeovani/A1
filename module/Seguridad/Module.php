<?php

namespace Seguridad;

use Zend\Db\Adapter\AdapterInterface;
use ZF\Apigility\Provider\ApigilityProviderInterface;
use Seguridad\Entity\Trusua;
use Seguridad\Repository\ITrusuaRepository;
use Seguridad\Repository\Impl\TrusuaRepository;
use Seguridad\Core\BaseRepository;

class Module implements ApigilityProviderInterface {

    public function getConfig() {
        return include __DIR__ . '/config/module.config.php';
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
