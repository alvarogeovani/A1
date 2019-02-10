<?php
 /**
 * ResourceFactory  of the Tvsalm table
 *
 * Factory from   TvsalmRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsalmResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsalm
 */
  namespace  Inventario\V1\Rest\Tvsalm;
 use Inventario\Repository\ITvsalmRepository;
 
class TvsalmResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsalmRepository::class);
  return new TvsalmResource($mapper);
   }
}
