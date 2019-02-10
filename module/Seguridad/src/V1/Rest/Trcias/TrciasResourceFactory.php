<?php
 /**
 * ResourceFactory  of the Trcias table
 *
 * Factory from   TrciasRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrciasResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trcias
 */
  namespace  Seguridad\V1\Rest\Trcias;
 use Seguridad\Repository\ITrciasRepository;
 
class TrciasResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrciasRepository::class);
  return new TrciasResource($mapper);
   }
}
