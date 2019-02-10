<?php
 /**
 * ResourceFactory  of the Tvmovi table
 *
 * Factory from   TvmoviRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvmoviResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvmovi
 */
  namespace  Inventario\V1\Rest\Tvmovi;
 use Inventario\Repository\ITvmoviRepository;
 
class TvmoviResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvmoviRepository::class);
  return new TvmoviResource($mapper);
   }
}
