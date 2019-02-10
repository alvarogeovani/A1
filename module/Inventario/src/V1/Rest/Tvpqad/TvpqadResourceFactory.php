<?php
 /**
 * ResourceFactory  of the Tvpqad table
 *
 * Factory from   TvpqadRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvpqadResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvpqad
 */
  namespace  Inventario\V1\Rest\Tvpqad;
 use Inventario\Repository\ITvpqadRepository;
 
class TvpqadResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvpqadRepository::class);
  return new TvpqadResource($mapper);
   }
}
