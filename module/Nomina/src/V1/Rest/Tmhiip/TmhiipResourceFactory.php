<?php
namespace Nomina\V1\Rest\Tmhiip;

class TmhiipResourceFactory
{
    public function __invoke($services)
    {
        return new TmhiipResource();
    }
}
