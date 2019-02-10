<?php
 /**
 * ResourceFactory  of the Tttido table
 *
 * Factory from   TttidoRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TttidoResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Tttido
 */
  namespace  Facturacion\V1\Rest\Tttido;
 use Facturacion\Repository\ITttidoRepository;
 
class TttidoResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITttidoRepository::class);
  return new TttidoResource($mapper);
   }
}
