<?php
 /**
 * ResourceFactory  of the Trhpah table
 *
 * Factory from   TrhpahRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhpahResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trhpah
 */
  namespace  Seguridad\V1\Rest\Trhpah;
 use Seguridad\Repository\ITrhpahRepository;
 
class TrhpahResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrhpahRepository::class);
  return new TrhpahResource($mapper);
   }
}
