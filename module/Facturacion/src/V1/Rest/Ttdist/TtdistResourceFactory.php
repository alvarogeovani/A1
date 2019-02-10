<?php
 /**
 * ResourceFactory  of the Ttdist table
 *
 * Factory from   TtdistRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdistResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdist
 */
  namespace  Facturacion\V1\Rest\Ttdist;
 use Facturacion\Repository\ITtdistRepository;
 
class TtdistResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtdistRepository::class);
  return new TtdistResource($mapper);
   }
}
