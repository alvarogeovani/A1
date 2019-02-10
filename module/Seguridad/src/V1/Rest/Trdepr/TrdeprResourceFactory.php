<?php
 /**
 * ResourceFactory  of the Trdepr table
 *
 * Factory from   TrdeprRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrdeprResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trdepr
 */
  namespace  Seguridad\V1\Rest\Trdepr;
 use Seguridad\Repository\ITrdeprRepository;
 
class TrdeprResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrdeprRepository::class);
  return new TrdeprResource($mapper);
   }
}
