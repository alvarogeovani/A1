<?php
 /**
 * ResourceFactory  of the Tvbode table
 *
 * Factory from   TvbodeRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvbodeResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvbode
 */
  namespace  Inventario\V1\Rest\Tvbode;
 use Inventario\Repository\ITvbodeRepository;
 
class TvbodeResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvbodeRepository::class);
  return new TvbodeResource($mapper);
   }
}
