<?php
 /**
 * ResourceFactory  of the Trpref table
 *
 * Factory from   TrprefRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrprefResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trpref
 */
  namespace  Seguridad\V1\Rest\Trpref;
 use Seguridad\Repository\ITrprefRepository;
 
class TrprefResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrprefRepository::class);
  return new TrprefResource($mapper);
   }
}
