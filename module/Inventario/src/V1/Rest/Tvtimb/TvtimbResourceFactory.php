<?php
 /**
 * ResourceFactory  of the Tvtimb table
 *
 * Factory from   TvtimbRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvtimbResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvtimb
 */
  namespace  Inventario\V1\Rest\Tvtimb;
 use Inventario\Repository\ITvtimbRepository;
 
class TvtimbResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvtimbRepository::class);
  return new TvtimbResource($mapper);
   }
}
