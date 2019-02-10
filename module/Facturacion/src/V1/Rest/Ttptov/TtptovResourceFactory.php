<?php
 /**
 * ResourceFactory  of the Ttptov table
 *
 * Factory from   TtptovRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtptovResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttptov
 */
  namespace  Facturacion\V1\Rest\Ttptov;
 use Facturacion\Repository\ITtptovRepository;
 
class TtptovResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtptovRepository::class);
  return new TtptovResource($mapper);
   }
}
