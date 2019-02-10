<?php
namespace Nomina\V1\Rest\Tmmaph;

class TmmaphResourceFactory
{
    public function __invoke($services)
    {
        return new TmmaphResource();
    }
}
