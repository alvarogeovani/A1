<?php
namespace Nomina\V1\Rest\Tmutco;

class TmutcoResourceFactory
{
    public function __invoke($services)
    {
        return new TmutcoResource();
    }
}
