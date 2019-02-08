<?php
namespace Seguridad\V1\Rest\Trhpam;
use Seguridad\Repository\ITrhpamRepository;
class TrhpamResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrhpamRepository::class);
        return new TrhpamResource($mapper);
    }
}
