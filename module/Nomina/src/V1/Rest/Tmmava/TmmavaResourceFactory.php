<?php
namespace Nomina\V1\Rest\Tmmava;

class TmmavaResourceFactory
{
    public function __invoke($services)
    {
        return new TmmavaResource();
    }
}
