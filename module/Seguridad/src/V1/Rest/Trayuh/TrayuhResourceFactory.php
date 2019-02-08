<?php
namespace Seguridad\V1\Rest\Trayuh;
use Seguridad\Repository\ITrayuhRepository;
class TrayuhResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrayuhRepository::class);
        return new TrayuhResource($mapper);
    }
}
