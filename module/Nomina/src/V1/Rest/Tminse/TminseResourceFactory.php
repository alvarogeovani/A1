<?php
namespace Nomina\V1\Rest\Tminse;

class TminseResourceFactory
{
    public function __invoke($services)
    {
        return new TminseResource();
    }
}
