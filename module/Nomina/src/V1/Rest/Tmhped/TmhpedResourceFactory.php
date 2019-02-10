<?php
namespace Nomina\V1\Rest\Tmhped;

class TmhpedResourceFactory
{
    public function __invoke($services)
    {
        return new TmhpedResource();
    }
}
