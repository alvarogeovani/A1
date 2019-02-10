<?php
 /**
 * ResourceFactory  of the Tropch table
 *
 * Factory from   TropchRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TropchResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Tropch
 */
  namespace  Seguridad\V1\Rest\Tropch;
 use Seguridad\Repository\ITropchRepository;
 
class TropchResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITropchRepository::class);
  return new TropchResource($mapper);
   }
}
