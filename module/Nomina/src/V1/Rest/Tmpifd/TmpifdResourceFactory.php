<?php
namespace Nomina\V1\Rest\Tmpifd;

class TmpifdResourceFactory
{
    public function __invoke($services)
    {
        return new TmpifdResource();
    }
}
