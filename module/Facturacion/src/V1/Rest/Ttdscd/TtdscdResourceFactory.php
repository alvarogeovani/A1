<?php
 /**
 * ResourceFactory  of the Ttdscd table
 *
 * Factory from   TtdscdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdscdResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdscd
 */
  namespace  Facturacion\V1\Rest\Ttdscd;
 use Facturacion\Repository\ITtdscdRepository;
 
class TtdscdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtdscdRepository::class);
  return new TtdscdResource($mapper);
   }
}
