<?php
 /**
 * ResourceFactory  of the Ttfvad table
 *
 * Factory from   TtfvadRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtfvadResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttfvad
 */
  namespace  Facturacion\V1\Rest\Ttfvad;
 use Facturacion\Repository\ITtfvadRepository;
 
class TtfvadResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtfvadRepository::class);
  return new TtfvadResource($mapper);
   }
}
