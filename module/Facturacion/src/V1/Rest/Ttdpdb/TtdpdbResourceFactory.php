<?php
 /**
 * ResourceFactory  of the Ttdpdb table
 *
 * Factory from   TtdpdbRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtdpdbResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttdpdb
 */
  namespace  Facturacion\V1\Rest\Ttdpdb;
 use Facturacion\Repository\ITtdpdbRepository;
 
class TtdpdbResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtdpdbRepository::class);
  return new TtdpdbResource($mapper);
   }
}
