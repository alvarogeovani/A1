<?php
 /**
 * ResourceFactory  of the Tvfaco table
 *
 * Factory from   TvfacoRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvfacoResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvfaco
 */
  namespace  Inventario\V1\Rest\Tvfaco;
 use Inventario\Repository\ITvfacoRepository;
 
class TvfacoResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvfacoRepository::class);
  return new TvfacoResource($mapper);
   }
}
