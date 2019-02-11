<?php
 /**
 * ResourceFactory  of the Trusua table
 *
 * Factory from   TrusuaRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrusuaResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trusua
 */
  namespace  Seguridad\V1\Rest\Trusua;
 use Seguridad\Repository\ITrusuaRepository;
 
class TrusuaResourceFactory
{

  public function __invoke($services)
  {
     $mapper = $services->get(ITrusuaRepository::class);
     return new TrusuaResource($mapper);
   }
}
