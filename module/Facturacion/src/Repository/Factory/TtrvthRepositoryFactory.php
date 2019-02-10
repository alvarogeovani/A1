<?php
 /**
 * Factory of the interf   Ttrvth Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtrvthRepositoryFactory
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Facturacion\Repository\Impl\TtrvthRepository;
  use Facturacion\Entity\Ttrvth;
 use Facturacion\Core\BaseRepository;
  class TtrvthRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TtrvthRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TtrvthRepository(new BaseRepository(new Ttrvth(), $dbAdapter));
 }
 }
