<?php
 /**
 * ResourceFactory  of the Trhpam table
 *
 * Factory from   TrhpamRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhpamResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trhpam
 */
  namespace  Seguridad\V1\Rest\Trhpam;
 use Seguridad\Repository\ITrhpamRepository;
 
class TrhpamResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrhpamRepository::class);
  return new TrhpamResource($mapper);
   }
}
