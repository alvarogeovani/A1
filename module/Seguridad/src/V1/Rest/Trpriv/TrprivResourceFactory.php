<?php
 /**
 * ResourceFactory  of the Trpriv table
 *
 * Factory from   TrprivRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrprivResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trpriv
 */
  namespace  Seguridad\V1\Rest\Trpriv;
 use Seguridad\Repository\ITrprivRepository;
 
class TrprivResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrprivRepository::class);
  return new TrprivResource($mapper);
   }
}
