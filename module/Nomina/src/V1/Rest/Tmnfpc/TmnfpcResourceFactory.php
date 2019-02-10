<?php
namespace Nomina\V1\Rest\Tmnfpc;

class TmnfpcResourceFactory
{
    public function __invoke($services)
    {
        return new TmnfpcResource();
    }
}
