<?php
 /**
 * Factory of the interf   Ttfvah Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtfvahRepositoryFactory
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Facturacion\Repository\Impl\TtfvahRepository;
  use Facturacion\Entity\Ttfvah;
 use Facturacion\Core\BaseRepository;
  class TtfvahRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TtfvahRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TtfvahRepository(new BaseRepository(new Ttfvah(), $dbAdapter));
 }
 }
