<?php
 /**
 * ResourceFactory  of the Trtabh table
 *
 * Factory from   TrtabhRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrtabhResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trtabh
 */
  namespace  Seguridad\V1\Rest\Trtabh;
 use Seguridad\Repository\ITrtabhRepository;
 
class TrtabhResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrtabhRepository::class);
  return new TrtabhResource($mapper);
   }
}
