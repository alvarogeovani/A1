<?php
 /**
 * ResourceFactory  of the Ttmovc table
 *
 * Factory from   TtmovcRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtmovcResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttmovc
 */
  namespace  Facturacion\V1\Rest\Ttmovc;
 use Facturacion\Repository\ITtmovcRepository;
 
class TtmovcResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtmovcRepository::class);
  return new TtmovcResource($mapper);
   }
}
