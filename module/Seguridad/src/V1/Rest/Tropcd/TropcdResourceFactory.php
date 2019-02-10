<?php
 /**
 * ResourceFactory  of the Tropcd table
 *
 * Factory from   TropcdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TropcdResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Tropcd
 */
  namespace  Seguridad\V1\Rest\Tropcd;
 use Seguridad\Repository\ITropcdRepository;
 
class TropcdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITropcdRepository::class);
  return new TropcdResource($mapper);
   }
}
