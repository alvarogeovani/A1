<?php
namespace Seguridad\V1\Rest\Trayud;

class TrayudResourceFactory
{
    public function __invoke($services)
    {
        return new TrayudResource();
    }
}
