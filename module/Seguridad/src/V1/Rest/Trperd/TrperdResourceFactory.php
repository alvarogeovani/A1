<?php
namespace Seguridad\V1\Rest\Trperd;
use Seguridad\Repository\ITrperdRepository;
class TrperdResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrperdRepository::class);
        return new TrperdResource($mapper);
    }
}
