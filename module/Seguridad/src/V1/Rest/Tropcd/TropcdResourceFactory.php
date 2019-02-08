<?php
namespace Seguridad\V1\Rest\Tropcd;
use Seguridad\Repository\ITropcdRepository;
class TropcdResourceFactory
{
    public function __invoke($services)
    {
       $mapper = $services->get(ITropcdRepository::class);
        return new TropcdResource($mapper);
    }
}
