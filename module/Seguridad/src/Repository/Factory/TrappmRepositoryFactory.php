<?php

/**
 * Factory of the interf   Trappm Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrappmRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */

namespace Seguridad\Repository\Factory;

use Zend\Db\Adapter\AdapterInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Seguridad\Repository\Impl\TrappmRepository;
use Seguridad\Entity\Trappm;
use Seguridad\Core\BaseRepository;

class TrappmRepositoryFactory implements FactoryInterface {

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return TrappmRepository
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null) {
        $dbAdapter = $container->get(AdapterInterface::class);
        return new TrappmRepository(new BaseRepository(new Trappm(), $dbAdapter));
    }

}
