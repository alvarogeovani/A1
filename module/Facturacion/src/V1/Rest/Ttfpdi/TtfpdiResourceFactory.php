<?php
 /**
 * ResourceFactory  of the Ttfpdi table
 *
 * Factory from   TtfpdiRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtfpdiResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttfpdi
 */
  namespace  Facturacion\V1\Rest\Ttfpdi;
 use Facturacion\Repository\ITtfpdiRepository;
 
class TtfpdiResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtfpdiRepository::class);
  return new TtfpdiResource($mapper);
   }
}
