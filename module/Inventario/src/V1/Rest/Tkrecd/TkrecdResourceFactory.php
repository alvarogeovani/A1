<?php
 /**
 * ResourceFactory  of the Tkrecd table
 *
 * Factory from   TkrecdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TkrecdResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tkrecd
 */
  namespace  Inventario\V1\Rest\Tkrecd;
 use Inventario\Repository\ITkrecdRepository;
 
class TkrecdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITkrecdRepository::class);
  return new TkrecdResource($mapper);
   }
}
