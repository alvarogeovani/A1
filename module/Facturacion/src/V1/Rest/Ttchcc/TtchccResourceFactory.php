<?php
 /**
 * ResourceFactory  of the Ttchcc table
 *
 * Factory from   TtchccRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtchccResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttchcc
 */
  namespace  Facturacion\V1\Rest\Ttchcc;
 use Facturacion\Repository\ITtchccRepository;
 
class TtchccResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtchccRepository::class);
  return new TtchccResource($mapper);
   }
}
