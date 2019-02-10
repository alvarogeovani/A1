<?php
namespace Nomina\V1\Rest\Tmheip;

class TmheipResourceFactory
{
    public function __invoke($services)
    {
        return new TmheipResource();
    }
}
