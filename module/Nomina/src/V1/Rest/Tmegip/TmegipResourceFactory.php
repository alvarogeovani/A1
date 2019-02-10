<?php
namespace Nomina\V1\Rest\Tmegip;

class TmegipResourceFactory
{
    public function __invoke($services)
    {
        return new TmegipResource();
    }
}
