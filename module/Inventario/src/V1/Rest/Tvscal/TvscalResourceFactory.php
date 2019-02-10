<?php
 /**
 * ResourceFactory  of the Tvscal table
 *
 * Factory from   TvscalRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvscalResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvscal
 */
  namespace  Inventario\V1\Rest\Tvscal;
 use Inventario\Repository\ITvscalRepository;
 
class TvscalResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvscalRepository::class);
  return new TvscalResource($mapper);
   }
}
