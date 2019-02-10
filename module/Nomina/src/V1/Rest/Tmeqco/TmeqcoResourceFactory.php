<?php
namespace Nomina\V1\Rest\Tmeqco;

class TmeqcoResourceFactory
{
    public function __invoke($services)
    {
        return new TmeqcoResource();
    }
}
