<?php
 /**
 * ResourceFactory  of the Tvdnar table
 *
 * Factory from   TvdnarRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvdnarResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvdnar
 */
  namespace  Inventario\V1\Rest\Tvdnar;
 use Inventario\Repository\ITvdnarRepository;
 
class TvdnarResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvdnarRepository::class);
  return new TvdnarResource($mapper);
   }
}
