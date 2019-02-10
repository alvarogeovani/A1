<?php
namespace Nomina\V1\Rest\Tmhmrc;

class TmhmrcResourceFactory
{
    public function __invoke($services)
    {
        return new TmhmrcResource();
    }
}
