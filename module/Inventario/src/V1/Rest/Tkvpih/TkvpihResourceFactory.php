<?php
 /**
 * ResourceFactory  of the Tkvpih table
 *
 * Factory from   TkvpihRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TkvpihResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tkvpih
 */
  namespace  Inventario\V1\Rest\Tkvpih;
 use Inventario\Repository\ITkvpihRepository;
 
class TkvpihResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITkvpihRepository::class);
  return new TkvpihResource($mapper);
   }
}
