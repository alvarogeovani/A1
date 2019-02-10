<?php
namespace Nomina\V1\Rest\Tmlbss;

class TmlbssResourceFactory
{
    public function __invoke($services)
    {
        return new TmlbssResource();
    }
}
