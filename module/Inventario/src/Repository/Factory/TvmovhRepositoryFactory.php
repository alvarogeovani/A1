<?php
 /**
 * Factory of the interf   Tvmovh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvmovhRepositoryFactory
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Inventario\Repository\Impl\TvmovhRepository;
  use Inventario\Entity\Tvmovh;
 use Inventario\Core\BaseRepository;
  class TvmovhRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TvmovhRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TvmovhRepository(new BaseRepository(new Tvmovh(), $dbAdapter));
 }
 }
