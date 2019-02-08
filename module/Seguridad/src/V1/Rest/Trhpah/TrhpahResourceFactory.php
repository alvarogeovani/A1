<?php
namespace Seguridad\V1\Rest\Trhpah;
use Seguridad\Repository\ITrhpahRepository;
class TrhpahResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrhpahRepository::class);
        return new TrhpahResource($mapper);
    }
}
