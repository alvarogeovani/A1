<?php
 /**
 * ResourceFactory  of the Tvsart table
 *
 * Factory from   TvsartRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsartResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsart
 */
  namespace  Inventario\V1\Rest\Tvsart;
 use Inventario\Repository\ITvsartRepository;
 
class TvsartResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsartRepository::class);
  return new TvsartResource($mapper);
   }
}
