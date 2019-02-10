<?php
 /**
 * ResourceFactory  of the Trhpad table
 *
 * Factory from   TrhpadRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrhpadResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trhpad
 */
  namespace  Seguridad\V1\Rest\Trhpad;
 use Seguridad\Repository\ITrhpadRepository;
 
class TrhpadResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrhpadRepository::class);
  return new TrhpadResource($mapper);
   }
}
