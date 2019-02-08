<?php
namespace Seguridad\V1\Rest\Trhpad;
use Seguridad\Repository\ITrhpadRepository;
class TrhpadResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrhpadRepository::class);
        return new TrhpadResource($mapper);
    }
}
