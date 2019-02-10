<?php
 /**
 * ResourceFactory  of the Tresoh table
 *
 * Factory from   TresohRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TresohResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Tresoh
 */
  namespace  Seguridad\V1\Rest\Tresoh;
 use Seguridad\Repository\ITresohRepository;
 
class TresohResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITresohRepository::class);
  return new TresohResource($mapper);
   }
}
