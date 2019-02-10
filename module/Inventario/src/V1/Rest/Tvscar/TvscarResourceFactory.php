<?php
 /**
 * ResourceFactory  of the Tvscar table
 *
 * Factory from   TvscarRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvscarResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvscar
 */
  namespace  Inventario\V1\Rest\Tvscar;
 use Inventario\Repository\ITvscarRepository;
 
class TvscarResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvscarRepository::class);
  return new TvscarResource($mapper);
   }
}
