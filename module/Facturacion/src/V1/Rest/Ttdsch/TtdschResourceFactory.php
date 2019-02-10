<?php
 /**
 * ResourceFactory  of the Ttdsch table
 *
 * Factory from   TtdschRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdschResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdsch
 */
  namespace  Facturacion\V1\Rest\Ttdsch;
 use Facturacion\Repository\ITtdschRepository;
 
class TtdschResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtdschRepository::class);
  return new TtdschResource($mapper);
   }
}
