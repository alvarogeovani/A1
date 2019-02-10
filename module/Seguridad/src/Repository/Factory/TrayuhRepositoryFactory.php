<?php
 /**
 * Factory of the interf   Trayuh Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrayuhRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Seguridad\Repository\Impl\TrayuhRepository;
  use Seguridad\Entity\Trayuh;
 use Seguridad\Core\BaseRepository;
  class TrayuhRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TrayuhRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TrayuhRepository(new BaseRepository(new Trayuh(), $dbAdapter));
 }
 }
