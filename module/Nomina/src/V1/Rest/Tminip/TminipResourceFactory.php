<?php
namespace Nomina\V1\Rest\Tminip;

class TminipResourceFactory
{
    public function __invoke($services)
    {
        return new TminipResource();
    }
}
