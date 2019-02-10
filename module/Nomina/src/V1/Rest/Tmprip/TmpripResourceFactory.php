<?php
namespace Nomina\V1\Rest\Tmprip;

class TmpripResourceFactory
{
    public function __invoke($services)
    {
        return new TmpripResource();
    }
}
