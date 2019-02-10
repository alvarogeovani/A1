<?php
 /**
 * ResourceFactory  of the Tvsamn table
 *
 * Factory from   TvsamnRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvsamnResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvsamn
 */
  namespace  Inventario\V1\Rest\Tvsamn;
 use Inventario\Repository\ITvsamnRepository;
 
class TvsamnResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvsamnRepository::class);
  return new TvsamnResource($mapper);
   }
}
