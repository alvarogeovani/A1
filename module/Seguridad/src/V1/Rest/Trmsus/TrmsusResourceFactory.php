<?php
 /**
 * ResourceFactory  of the Trmsus table
 *
 * Factory from   TrmsusRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrmsusResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trmsus
 */
  namespace  Seguridad\V1\Rest\Trmsus;
 use Seguridad\Repository\ITrmsusRepository;
 
class TrmsusResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrmsusRepository::class);
  return new TrmsusResource($mapper);
   }
}
