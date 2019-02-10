<?php
 /**
 * Factory of the interf   Tvarti Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvartiRepositoryFactory
 * @package Inventario
 * @subpackage Repository
 */
  namespace Inventario\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Inventario\Repository\Impl\TvartiRepository;
  use Inventario\Entity\Tvarti;
 use Inventario\Core\BaseRepository;
  class TvartiRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TvartiRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TvartiRepository(new BaseRepository(new Tvarti(), $dbAdapter));
 }
 }
