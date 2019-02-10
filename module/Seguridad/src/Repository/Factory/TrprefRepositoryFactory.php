<?php
 /**
 * Factory of the interf   Trpref Repository
 *
 * Development of business logic
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrprefRepositoryFactory
 * @package Seguridad
 * @subpackage Repository
 */
  namespace Seguridad\Repository\Factory;
 use Zend\Db\Adapter\AdapterInterface;
 use Interop\Container\ContainerInterface;
  use Zend\ServiceManager\Factory\FactoryInterface;
  use Seguridad\Repository\Impl\TrprefRepository;
  use Seguridad\Entity\Trpref;
 use Seguridad\Core\BaseRepository;
  class TrprefRepositoryFactory implements FactoryInterface
  
{

      /**
 * @param ContainerInterface $container
 * @param string $requestedName
 * @param null|array $options
 * @return TrprefRepository
  */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
  $dbAdapter = $container->get(AdapterInterface::class);
  return new TrprefRepository(new BaseRepository(new Trpref(), $dbAdapter));
 }
 }
