<?php
 /**
 * ResourceFactory  of the Tthzon table
 *
 * Factory from   TthzonRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TthzonResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Tthzon
 */
  namespace  Facturacion\V1\Rest\Tthzon;
 use Facturacion\Repository\ITthzonRepository;
 
class TthzonResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITthzonRepository::class);
  return new TthzonResource($mapper);
   }
}
