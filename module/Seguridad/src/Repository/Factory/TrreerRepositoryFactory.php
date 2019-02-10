<?php
 /**
 * Factory of the interf   Trreer Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrreerRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Seguridad\Repository\Impl\TrreerRepository;
  use Seguridad\Entity\Trreer;
 use Seguridad\Core\BaseRepository;
  class TrreerRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TrreerRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TrreerRepository(new BaseRepository(new Trreer(), $dbAdapter));
 }
 }
