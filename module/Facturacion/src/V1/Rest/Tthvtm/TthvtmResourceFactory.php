<?php
 /**
 * ResourceFactory  of the Tthvtm table
 *
 * Factory from   TthvtmRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TthvtmResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Tthvtm
 */
  namespace  Facturacion\V1\Rest\Tthvtm;
 use Facturacion\Repository\ITthvtmRepository;
 
class TthvtmResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITthvtmRepository::class);
  return new TthvtmResource($mapper);
   }
}
