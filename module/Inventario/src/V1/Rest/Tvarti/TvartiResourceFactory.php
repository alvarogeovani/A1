<?php
 /**
 * ResourceFactory  of the Tvarti table
 *
 * Factory from   TvartiRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TvartiResourceFactory
 * @package Rest/Inventario
 * @subpackage \V1\Rest\Tvarti
 */
  namespace  Inventario\V1\Rest\Tvarti;
 use Inventario\Repository\ITvartiRepository;
 
class TvartiResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITvartiRepository::class);
  return new TvartiResource($mapper);
   }
}
