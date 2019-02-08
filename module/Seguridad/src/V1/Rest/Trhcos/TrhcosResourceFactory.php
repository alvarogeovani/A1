<?php
namespace Seguridad\V1\Rest\Trhcos;
use Seguridad\Repository\ITrhcosRepository;
class TrhcosResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrhcosRepository::class);
        return new TrhcosResource($mapper);
    }
}
