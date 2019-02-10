<?php
namespace Nomina\V1\Rest\Tmmapd;

class TmmapdResourceFactory
{
    public function __invoke($services)
    {
        return new TmmapdResource();
    }
}
