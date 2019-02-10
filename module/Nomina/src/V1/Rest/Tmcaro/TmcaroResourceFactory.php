<?php
namespace Nomina\V1\Rest\Tmcaro;

class TmcaroResourceFactory
{
    public function __invoke($services)
    {
        return new TmcaroResource();
    }
}
