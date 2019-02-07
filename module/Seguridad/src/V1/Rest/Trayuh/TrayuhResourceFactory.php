<?php
namespace Seguridad\V1\Rest\Trayuh;

class TrayuhResourceFactory
{
    public function __invoke($services)
    {
        return new TrayuhResource();
    }
}
