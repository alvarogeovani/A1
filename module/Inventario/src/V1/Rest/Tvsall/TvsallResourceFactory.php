<?php
 /**
 * ResourceFactory  of the Tvsall table
 *
 * Factory from   TvsallRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsallResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsall
 */
  namespace  Inventario\V1\Rest\Tvsall;
 use Inventario\Repository\ITvsallRepository;
 
class TvsallResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsallRepository::class);
  return new TvsallResource($mapper);
   }
}
