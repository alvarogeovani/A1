<?php
 /**
 * Factory of the interf   Tkvpih Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TkvpihRepositoryFactory
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Inventario\Repository\Impl\TkvpihRepository;
  use Inventario\Entity\Tkvpih;
 use Inventario\Core\BaseRepository;
  class TkvpihRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TkvpihRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TkvpihRepository(new BaseRepository(new Tkvpih(), $dbAdapter));
 }
 }
