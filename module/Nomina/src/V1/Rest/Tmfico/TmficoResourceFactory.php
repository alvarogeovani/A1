<?php
namespace Nomina\V1\Rest\Tmfico;

class TmficoResourceFactory
{
    public function __invoke($services)
    {
        return new TmficoResource();
    }
}
