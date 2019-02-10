<?php
 /**
 * ResourceFactory  of the Tkrech table
 *
 * Factory from   TkrechRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TkrechResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tkrech
 */
  namespace  Inventario\V1\Rest\Tkrech;
 use Inventario\Repository\ITkrechRepository;
 
class TkrechResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITkrechRepository::class);
  return new TkrechResource($mapper);
   }
}
