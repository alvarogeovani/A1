<?php
namespace Seguridad\V1\Rest\Trperf;
use Seguridad\Repository\ITrperfRepository;
class TrperfResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrperfRepository::class);
        return new TrperfResource($mapper);
    }
}
