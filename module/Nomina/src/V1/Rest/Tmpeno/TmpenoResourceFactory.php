<?php
namespace Nomina\V1\Rest\Tmpeno;

class TmpenoResourceFactory
{
    public function __invoke($services)
    {
        return new TmpenoResource();
    }
}
