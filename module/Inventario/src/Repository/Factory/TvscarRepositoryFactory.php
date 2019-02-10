<?php
 /**
 * Factory of the interf   Tvscar Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvscarRepositoryFactory
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Inventario\Repository\Impl\TvscarRepository;
  use Inventario\Entity\Tvscar;
 use Inventario\Core\BaseRepository;
  class TvscarRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TvscarRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TvscarRepository(new BaseRepository(new Tvscar(), $dbAdapter));
 }
 }
