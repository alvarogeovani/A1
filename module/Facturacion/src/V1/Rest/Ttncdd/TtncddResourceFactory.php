<?php
 /**
 * ResourceFactory  of the Ttncdd table
 *
 * Factory from   TtncddRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtncddResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttncdd
 */
  namespace  Facturacion\V1\Rest\Ttncdd;
 use Facturacion\Repository\ITtncddRepository;
 
class TtncddResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtncddRepository::class);
  return new TtncddResource($mapper);
   }
}
