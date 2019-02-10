<?php
 /**
 * ResourceFactory  of the Ttncdh table
 *
 * Factory from   TtncdhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtncdhResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttncdh
 */
  namespace  Facturacion\V1\Rest\Ttncdh;
 use Facturacion\Repository\ITtncdhRepository;
 
class TtncdhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtncdhRepository::class);
  return new TtncdhResource($mapper);
   }
}
