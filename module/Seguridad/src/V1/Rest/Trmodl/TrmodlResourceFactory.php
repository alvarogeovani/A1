<?php
 /**
 * ResourceFactory  of the Trmodl table
 *
 * Factory from   TrmodlRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrmodlResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trmodl
 */
  namespace  Seguridad\V1\Rest\Trmodl;
 use Seguridad\Repository\ITrmodlRepository;
 
class TrmodlResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrmodlRepository::class);
  return new TrmodlResource($mapper);
   }
}
