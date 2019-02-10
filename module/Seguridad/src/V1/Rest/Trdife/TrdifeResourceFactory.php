<?php
 /**
 * ResourceFactory  of the Trdife table
 *
 * Factory from   TrdifeRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrdifeResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trdife
 */
  namespace  Seguridad\V1\Rest\Trdife;
 use Seguridad\Repository\ITrdifeRepository;
 
class TrdifeResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrdifeRepository::class);
  return new TrdifeResource($mapper);
   }
}
