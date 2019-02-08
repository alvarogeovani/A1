<?php
namespace Seguridad\V1\Rest\Tropch;
use Seguridad\Repository\ITropchRepository;
class TropchResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITropchRepository::class);
        return new TropchResource($mapper);
    }
}
