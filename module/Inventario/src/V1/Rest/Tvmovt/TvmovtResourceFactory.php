<?php
 /**
 * ResourceFactory  of the Tvmovt table
 *
 * Factory from   TvmovtRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvmovtResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvmovt
 */
  namespace  Inventario\V1\Rest\Tvmovt;
 use Inventario\Repository\ITvmovtRepository;
 
class TvmovtResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvmovtRepository::class);
  return new TvmovtResource($mapper);
   }
}
