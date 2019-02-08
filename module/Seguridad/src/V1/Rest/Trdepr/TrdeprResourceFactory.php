<?php
namespace Seguridad\V1\Rest\Trdepr;
use Seguridad\Repository\ITrdeprRepository;
class TrdeprResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrdeprRepository::class);
        return new TrdeprResource($mapper);
    }
}
