<?php
 /**
 * ResourceFactory  of the Trhcos table
 *
 * Factory from   TrhcosRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhcosResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trhcos
 */
  namespace  Seguridad\V1\Rest\Trhcos;
 use Seguridad\Repository\ITrhcosRepository;
 
class TrhcosResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrhcosRepository::class);
  return new TrhcosResource($mapper);
   }
}
