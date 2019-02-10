<?php
 /**
 * ResourceFactory  of the Ttncyd table
 *
 * Factory from   TtncydRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtncydResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttncyd
 */
  namespace  Facturacion\V1\Rest\Ttncyd;
 use Facturacion\Repository\ITtncydRepository;
 
class TtncydResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtncydRepository::class);
  return new TtncydResource($mapper);
   }
}
