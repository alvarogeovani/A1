<?php
 /**
 * ResourceFactory  of the Ttmoau table
 *
 * Factory from   TtmoauRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtmoauResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttmoau
 */
  namespace  Facturacion\V1\Rest\Ttmoau;
 use Facturacion\Repository\ITtmoauRepository;
 
class TtmoauResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtmoauRepository::class);
  return new TtmoauResource($mapper);
   }
}
