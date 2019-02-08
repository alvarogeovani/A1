<?php
namespace Seguridad\V1\Rest\Trpriv;
use Seguridad\Repository\ITrprivRepository;
class TrprivResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrprivRepository::class);
        return new TrprivResource($mapper);
    }
}
