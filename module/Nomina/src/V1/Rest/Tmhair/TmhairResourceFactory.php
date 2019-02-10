<?php
namespace Nomina\V1\Rest\Tmhair;

class TmhairResourceFactory
{
    public function __invoke($services)
    {
        return new TmhairResource();
    }
}
