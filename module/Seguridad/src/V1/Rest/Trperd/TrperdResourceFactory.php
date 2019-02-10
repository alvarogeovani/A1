<?php
 /**
 * ResourceFactory  of the Trperd table
 *
 * Factory from   TrperdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrperdResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trperd
 */
  namespace  Seguridad\V1\Rest\Trperd;
 use Seguridad\Repository\ITrperdRepository;
 
class TrperdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrperdRepository::class);
  return new TrperdResource($mapper);
   }
}
