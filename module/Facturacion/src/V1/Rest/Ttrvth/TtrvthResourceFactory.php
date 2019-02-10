<?php
 /**
 * ResourceFactory  of the Ttrvth table
 *
 * Factory from   TtrvthRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtrvthResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttrvth
 */
  namespace  Facturacion\V1\Rest\Ttrvth;
 use Facturacion\Repository\ITtrvthRepository;
 
class TtrvthResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtrvthRepository::class);
  return new TtrvthResource($mapper);
   }
}
