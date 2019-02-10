<?php
namespace Nomina\V1\Rest\Tmhmnm;

class TmhmnmResourceFactory
{
    public function __invoke($services)
    {
        return new TmhmnmResource();
    }
}
