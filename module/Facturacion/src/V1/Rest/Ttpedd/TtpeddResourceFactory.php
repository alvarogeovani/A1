<?php
 /**
 * ResourceFactory  of the Ttpedd table
 *
 * Factory from   TtpeddRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtpeddResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttpedd
 */
  namespace  Facturacion\V1\Rest\Ttpedd;
 use Facturacion\Repository\ITtpeddRepository;
 
class TtpeddResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtpeddRepository::class);
  return new TtpeddResource($mapper);
   }
}
