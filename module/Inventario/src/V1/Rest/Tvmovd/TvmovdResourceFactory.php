<?php
 /**
 * ResourceFactory  of the Tvmovd table
 *
 * Factory from   TvmovdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvmovdResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvmovd
 */
  namespace  Inventario\V1\Rest\Tvmovd;
 use Inventario\Repository\ITvmovdRepository;
 
class TvmovdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvmovdRepository::class);
  return new TvmovdResource($mapper);
   }
}
