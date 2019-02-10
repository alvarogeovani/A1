<?php
 /**
 * ResourceFactory  of the Ttpedh table
 *
 * Factory from   TtpedhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtpedhResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttpedh
 */
  namespace  Facturacion\V1\Rest\Ttpedh;
 use Facturacion\Repository\ITtpedhRepository;
 
class TtpedhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtpedhRepository::class);
  return new TtpedhResource($mapper);
   }
}
