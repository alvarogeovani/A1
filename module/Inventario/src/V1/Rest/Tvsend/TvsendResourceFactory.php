<?php
 /**
 * ResourceFactory  of the Tvsend table
 *
 * Factory from   TvsendRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsendResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsend
 */
  namespace  Inventario\V1\Rest\Tvsend;
 use Inventario\Repository\ITvsendRepository;
 
class TvsendResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsendRepository::class);
  return new TvsendResource($mapper);
   }
}
