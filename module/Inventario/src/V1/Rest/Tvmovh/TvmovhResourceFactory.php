<?php
 /**
 * ResourceFactory  of the Tvmovh table
 *
 * Factory from   TvmovhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvmovhResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvmovh
 */
  namespace  Inventario\V1\Rest\Tvmovh;
 use Inventario\Repository\ITvmovhRepository;
 
class TvmovhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvmovhRepository::class);
  return new TvmovhResource($mapper);
   }
}
