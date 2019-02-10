<?php
 /**
 * ResourceFactory  of the Trperf table
 *
 * Factory from   TrperfRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrperfResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trperf
 */
  namespace  Seguridad\V1\Rest\Trperf;
 use Seguridad\Repository\ITrperfRepository;
 
class TrperfResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrperfRepository::class);
  return new TrperfResource($mapper);
   }
}
