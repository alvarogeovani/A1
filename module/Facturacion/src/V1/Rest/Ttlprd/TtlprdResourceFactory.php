<?php
 /**
 * ResourceFactory  of the Ttlprd table
 *
 * Factory from   TtlprdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtlprdResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttlprd
 */
  namespace  Facturacion\V1\Rest\Ttlprd;
 use Facturacion\Repository\ITtlprdRepository;
 
class TtlprdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtlprdRepository::class);
  return new TtlprdResource($mapper);
   }
}
