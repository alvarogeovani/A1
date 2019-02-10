<?php
 /**
 * ResourceFactory  of the Ttcidi table
 *
 * Factory from   TtcidiRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtcidiResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttcidi
 */
  namespace  Facturacion\V1\Rest\Ttcidi;
 use Facturacion\Repository\ITtcidiRepository;
 
class TtcidiResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtcidiRepository::class);
  return new TtcidiResource($mapper);
   }
}
