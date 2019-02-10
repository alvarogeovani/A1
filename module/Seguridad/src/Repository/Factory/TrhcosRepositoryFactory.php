<?php
 /**
 * Factory of the interf   Trhcos Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhcosRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Seguridad\Repository\Impl\TrhcosRepository;
  use Seguridad\Entity\Trhcos;
 use Seguridad\Core\BaseRepository;
  class TrhcosRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TrhcosRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TrhcosRepository(new BaseRepository(new Trhcos(), $dbAdapter));
 }
 }
