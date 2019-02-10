<?php
 /**
 * ResourceFactory  of the Tkvcnh table
 *
 * Factory from   TkvcnhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TkvcnhResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tkvcnh
 */
  namespace  Inventario\V1\Rest\Tkvcnh;
 use Inventario\Repository\ITkvcnhRepository;
 
class TkvcnhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITkvcnhRepository::class);
  return new TkvcnhResource($mapper);
   }
}
