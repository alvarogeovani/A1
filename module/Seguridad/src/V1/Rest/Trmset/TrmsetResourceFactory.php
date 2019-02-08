<?php
namespace Seguridad\V1\Rest\Trmset;
use Seguridad\Repository\ITrmsetRepository;
class TrmsetResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrmsetRepository::class);
        return new TrmsetResource($mapper);
    }
}
