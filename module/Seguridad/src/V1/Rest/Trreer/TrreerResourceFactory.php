<?php
 /**
 * ResourceFactory  of the Trreer table
 *
 * Factory from   TrreerRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrreerResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trreer
 */
  namespace  Seguridad\V1\Rest\Trreer;
 use Seguridad\Repository\ITrreerRepository;
 
class TrreerResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrreerRepository::class);
  return new TrreerResource($mapper);
   }
}
