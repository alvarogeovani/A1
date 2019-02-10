<?php
 /**
 * ResourceFactory  of the Ttauto table
 *
 * Factory from   TtautoRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtautoResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttauto
 */
  namespace  Facturacion\V1\Rest\Ttauto;
 use Facturacion\Repository\ITtautoRepository;
 
class TtautoResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtautoRepository::class);
  return new TtautoResource($mapper);
   }
}
