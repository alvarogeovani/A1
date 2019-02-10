<?php
namespace Nomina\V1\Rest\Tmmaeg;

class TmmaegResourceFactory
{
    public function __invoke($services)
    {
        return new TmmaegResource();
    }
}
