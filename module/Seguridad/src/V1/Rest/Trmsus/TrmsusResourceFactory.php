<?php
namespace Seguridad\V1\Rest\Trmsus;
use Seguridad\Repository\ITrmsusRepository;
class TrmsusResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrmsusRepository::class);
        return new TrmsusResource($mapper);
    }
}
