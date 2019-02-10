<?php
 /**
 * Factory of the interf   Ttrvtd Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtrvtdRepositoryFactory
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Facturacion\Repository\Impl\TtrvtdRepository;
  use Facturacion\Entity\Ttrvtd;
 use Facturacion\Core\BaseRepository;
  class TtrvtdRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TtrvtdRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TtrvtdRepository(new BaseRepository(new Ttrvtd(), $dbAdapter));
 }
 }
