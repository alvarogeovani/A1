<?php
 /**
 * ResourceFactory  of the Tvsame table
 *
 * Factory from   TvsameRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsameResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsame
 */
  namespace  Inventario\V1\Rest\Tvsame;
 use Inventario\Repository\ITvsameRepository;
 
class TvsameResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsameRepository::class);
  return new TvsameResource($mapper);
   }
}
