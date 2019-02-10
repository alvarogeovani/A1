<?php
 /**
 * ResourceFactory  of the Trappm table
 *
 * Factory from   TrappmRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrappmResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trappm
 */
  namespace  Seguridad\V1\Rest\Trappm;
 use Seguridad\Repository\ITrappmRepository;
 
class TrappmResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrappmRepository::class);
  return new TrappmResource($mapper);
   }
}
