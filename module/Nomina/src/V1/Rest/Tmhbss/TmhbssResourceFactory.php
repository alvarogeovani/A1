<?php
namespace Nomina\V1\Rest\Tmhbss;

class TmhbssResourceFactory
{
    public function __invoke($services)
    {
        return new TmhbssResource();
    }
}
