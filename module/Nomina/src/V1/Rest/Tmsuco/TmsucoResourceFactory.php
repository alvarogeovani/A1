<?php
namespace Nomina\V1\Rest\Tmsuco;

class TmsucoResourceFactory
{
    public function __invoke($services)
    {
        return new TmsucoResource();
    }
}
