<?php
 /**
 * ResourceFactory  of the Ttfvah table
 *
 * Factory from   TtfvahRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtfvahResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttfvah
 */
  namespace  Facturacion\V1\Rest\Ttfvah;
 use Facturacion\Repository\ITtfvahRepository;
 
class TtfvahResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtfvahRepository::class);
  return new TtfvahResource($mapper);
   }
}
