<?php
namespace Nomina\V1\Rest\Tmcafa;

class TmcafaResourceFactory
{
    public function __invoke($services)
    {
        return new TmcafaResource();
    }
}
