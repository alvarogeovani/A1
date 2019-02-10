<?php
namespace Nomina\V1\Rest\Tmhpeh;

class TmhpehResourceFactory
{
    public function __invoke($services)
    {
        return new TmhpehResource();
    }
}
