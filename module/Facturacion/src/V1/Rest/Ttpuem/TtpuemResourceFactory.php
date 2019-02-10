<?php
 /**
 * ResourceFactory  of the Ttpuem table
 *
 * Factory from   TtpuemRepository
 *
 * @author ATIJAGUAR CÍA. CLTDA. www.atijaguar.com
 * @uses       TtpuemResourceFactory
 * @package Rest/Facturacion
 * @subpackage \V1\Rest\Ttpuem
 */
  namespace  Facturacion\V1\Rest\Ttpuem;
 use Facturacion\Repository\ITtpuemRepository;
 
class TtpuemResourceFactory
{

  public function __invoke($services)
  {
  $mapper = $services->get(ITtpuemRepository::class);
  return new TtpuemResource($mapper);
   }
}
