<?php
 /**
 * ResourceFactory  of the Ttdesc table
 *
 * Factory from   TtdescRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdescResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdesc
 */
  namespace  Facturacion\V1\Rest\Ttdesc;
 use Facturacion\Repository\ITtdescRepository;
 
class TtdescResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtdescRepository::class);
  return new TtdescResource($mapper);
   }
}
