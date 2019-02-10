<?php
namespace Nomina\V1\Rest\Tmabss;

class TmabssResourceFactory
{
    public function __invoke($services)
    {
        return new TmabssResource();
    }
}
