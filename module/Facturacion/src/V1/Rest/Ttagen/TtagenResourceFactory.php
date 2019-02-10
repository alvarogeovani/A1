<?php
 /**
 * ResourceFactory  of the Ttagen table
 *
 * Factory from   TtagenRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtagenResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttagen
 */
  namespace  Facturacion\V1\Rest\Ttagen;
 use Facturacion\Repository\ITtagenRepository;
 
class TtagenResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtagenRepository::class);
  return new TtagenResource($mapper);
   }
}
