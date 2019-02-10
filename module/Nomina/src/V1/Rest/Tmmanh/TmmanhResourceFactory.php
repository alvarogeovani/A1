<?php
namespace Nomina\V1\Rest\Tmmanh;

class TmmanhResourceFactory
{
    public function __invoke($services)
    {
        return new TmmanhResource();
    }
}
