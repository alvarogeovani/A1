<?php
 /**
 * ResourceFactory  of the Ttlprh table
 *
 * Factory from   TtlprhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtlprhResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttlprh
 */
  namespace  Facturacion\V1\Rest\Ttlprh;
 use Facturacion\Repository\ITtlprhRepository;
 
class TtlprhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtlprhRepository::class);
  return new TtlprhResource($mapper);
   }
}
