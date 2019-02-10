<?php
 /**
 * Factory of the interf   Trhpah Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhpahRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Seguridad\Repository\Impl\TrhpahRepository;
  use Seguridad\Entity\Trhpah;
 use Seguridad\Core\BaseRepository;
  class TrhpahRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TrhpahRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TrhpahRepository(new BaseRepository(new Trhpah(), $dbAdapter));
 }
 }
