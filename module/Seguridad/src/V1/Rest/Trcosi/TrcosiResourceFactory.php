<?php
 /**
 * ResourceFactory  of the Trcosi table
 *
 * Factory from   TrcosiRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TrcosiResourceFactory
 * @package Rest/Seguridad
 * @subpackage \V1\Rest\Trcosi
 */
  namespace  Seguridad\V1\Rest\Trcosi;
 use Seguridad\Repository\ITrcosiRepository;
 
class TrcosiResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITrcosiRepository::class);
  return new TrcosiResource($mapper);
   }
}
