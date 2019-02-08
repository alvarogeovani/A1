<?php
namespace Seguridad\V1\Rest\Trmodl;

class TrmodlResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrmodlRepository::class);
        return new TrmodlResource($mapper);
    }
}
