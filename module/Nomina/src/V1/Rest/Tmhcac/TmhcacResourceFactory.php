<?php
namespace Nomina\V1\Rest\Tmhcac;

class TmhcacResourceFactory
{
    public function __invoke($services)
    {
        return new TmhcacResource();
    }
}
