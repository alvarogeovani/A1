<?php
 /**
 * Factory of the interf   Ttncdh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtncdhRepositoryFactory
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Facturacion\Repository\Impl\TtncdhRepository;
  use Facturacion\Entity\Ttncdh;
 use Facturacion\Core\BaseRepository;
  class TtncdhRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TtncdhRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TtncdhRepository(new BaseRepository(new Ttncdh(), $dbAdapter));
 }
 }
