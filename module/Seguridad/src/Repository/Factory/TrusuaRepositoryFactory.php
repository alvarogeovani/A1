<?php

/**
 * Factory of the interf   Trusua Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrusuaRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */

namespace Seguridad\Repository\Factory;

use Zend\Db\Adapter\AdapterInterface;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Seguridad\Repository\Impl\TrusuaRepository;
use Seguridad\Entity\Trusua;
use Seguridad\Core\BaseRepository;

class TrusuaRepositoryFactory implements FactoryInterface
    {

    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param null|array $options
     * @return TrusuaRepository
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $dbAdapter = $container->get(AdapterInterface::class);
        return new TrusuaRepository(new BaseRepository(new Trusua(), $dbAdapter));
    }

    }
