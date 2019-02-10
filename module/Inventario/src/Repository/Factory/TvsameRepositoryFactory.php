<?php
 /**
 * Factory of the interf   Tvsame Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsameRepositoryFactory
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Inventario\Repository\Impl\TvsameRepository;
  use Inventario\Entity\Tvsame;
 use Inventario\Core\BaseRepository;
  class TvsameRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TvsameRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TvsameRepository(new BaseRepository(new Tvsame(), $dbAdapter));
 }
 }
