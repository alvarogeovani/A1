<?php
namespace Nomina\V1\Rest\Tmmaid;

class TmmaidResourceFactory
{
    public function __invoke($services)
    {
        return new TmmaidResource();
    }
}
