<?php
namespace Seguridad\V1\Rest\Trappm;

class TrappmResourceFactory
{
    public function __invoke($services)
    {
        return new TrappmResource();
    }
}
