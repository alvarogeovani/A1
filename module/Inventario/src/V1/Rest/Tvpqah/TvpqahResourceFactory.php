<?php
 /**
 * ResourceFactory  of the Tvpqah table
 *
 * Factory from   TvpqahRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvpqahResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvpqah
 */
  namespace  Inventario\V1\Rest\Tvpqah;
 use Inventario\Repository\ITvpqahRepository;
 
class TvpqahResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvpqahRepository::class);
  return new TvpqahResource($mapper);
   }
}
