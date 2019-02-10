<?php
namespace Nomina\V1\Rest\Tmhpip;

class TmhpipResourceFactory
{
    public function __invoke($services)
    {
        return new TmhpipResource();
    }
}
