<?php
 /**
 * ResourceFactory  of the Trayud table
 *
 * Factory from   TrayudRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrayudResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trayud
 */
  namespace  Seguridad\V1\Rest\Trayud;
 use Seguridad\Repository\ITrayudRepository;
 
class TrayudResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrayudRepository::class);
  return new TrayudResource($mapper);
   }
}
