<?php
 /**
 * ResourceFactory  of the Tresod table
 *
 * Factory from   TresodRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TresodResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Tresod
 */
  namespace  Seguridad\V1\Rest\Tresod;
 use Seguridad\Repository\ITresodRepository;
 
class TresodResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITresodRepository::class);
  return new TresodResource($mapper);
   }
}
