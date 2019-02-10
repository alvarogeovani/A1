<?php
 /**
 * ResourceFactory  of the Trtabd table
 *
 * Factory from   TrtabdRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrtabdResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trtabd
 */
  namespace  Seguridad\V1\Rest\Trtabd;
 use Seguridad\Repository\ITrtabdRepository;
 
class TrtabdResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrtabdRepository::class);
  return new TrtabdResource($mapper);
   }
}
