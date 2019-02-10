<?php
 /**
 * ResourceFactory  of the Ttcpag table
 *
 * Factory from   TtcpagRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtcpagResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttcpag
 */
  namespace  Facturacion\V1\Rest\Ttcpag;
 use Facturacion\Repository\ITtcpagRepository;
 
class TtcpagResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtcpagRepository::class);
  return new TtcpagResource($mapper);
   }
}
