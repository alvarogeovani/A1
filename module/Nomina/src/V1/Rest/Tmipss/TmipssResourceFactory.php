<?php
namespace Nomina\V1\Rest\Tmipss;

class TmipssResourceFactory
{
    public function __invoke($services)
    {
        return new TmipssResource();
    }
}
