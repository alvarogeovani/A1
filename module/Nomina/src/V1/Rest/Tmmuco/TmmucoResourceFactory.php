<?php
namespace Nomina\V1\Rest\Tmmuco;

class TmmucoResourceFactory
{
    public function __invoke($services)
    {
        return new TmmucoResource();
    }
}
