<?php
 /**
 * ResourceFactory  of the Trayuh table
 *
 * Factory from   TrayuhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrayuhResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trayuh
 */
  namespace  Seguridad\V1\Rest\Trayuh;
 use Seguridad\Repository\ITrayuhRepository;
 
class TrayuhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrayuhRepository::class);
  return new TrayuhResource($mapper);
   }
}
