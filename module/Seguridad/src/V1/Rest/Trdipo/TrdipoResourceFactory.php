<?php
 /**
 * ResourceFactory  of the Trdipo table
 *
 * Factory from   TrdipoRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrdipoResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trdipo
 */
  namespace  Seguridad\V1\Rest\Trdipo;
 use Seguridad\Repository\ITrdipoRepository;
 
class TrdipoResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrdipoRepository::class);
  return new TrdipoResource($mapper);
   }
}
