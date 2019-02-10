<?php
 /**
 * ResourceFactory  of the Trmset table
 *
 * Factory from   TrmsetRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrmsetResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trmset
 */
  namespace  Seguridad\V1\Rest\Trmset;
 use Seguridad\Repository\ITrmsetRepository;
 
class TrmsetResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrmsetRepository::class);
  return new TrmsetResource($mapper);
   }
}
