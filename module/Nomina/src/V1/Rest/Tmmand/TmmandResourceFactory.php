<?php
namespace Nomina\V1\Rest\Tmmand;

class TmmandResourceFactory
{
    public function __invoke($services)
    {
        return new TmmandResource();
    }
}
