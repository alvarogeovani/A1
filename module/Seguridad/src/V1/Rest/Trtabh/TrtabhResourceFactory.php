<?php
namespace Seguridad\V1\Rest\Trtabh;
use Seguridad\Repository\ITrtabhRepository;
class TrtabhResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrtabhRepository::class);
        return new TrtabhResource($mapper);
    }
}
