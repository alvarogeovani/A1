<?php
 /**
 * ResourceFactory  of the Ttrvtd table
 *
 * Factory from   TtrvtdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtrvtdResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttrvtd
 */
  namespace  Facturacion\V1\Rest\Ttrvtd;
 use Facturacion\Repository\ITtrvtdRepository;
 
class TtrvtdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtrvtdRepository::class);
  return new TtrvtdResource($mapper);
   }
}
