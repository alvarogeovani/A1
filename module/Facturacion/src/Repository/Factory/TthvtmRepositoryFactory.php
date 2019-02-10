<?php
 /**
 * Factory of the interf   Tthvtm Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TthvtmRepositoryFactory
 * @package Facturacion
 * @subpackage Repository
 */
  namespace Facturacion\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Facturacion\Repository\Impl\TthvtmRepository;
  use Facturacion\Entity\Tthvtm;
 use Facturacion\Core\BaseRepository;
  class TthvtmRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TthvtmRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TthvtmRepository(new BaseRepository(new Tthvtm(), $dbAdapter));
 }
 }
