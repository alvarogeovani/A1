<?php
namespace Nomina\V1\Rest\Tmroco;

class TmrocoResourceFactory
{
    public function __invoke($services)
    {
        return new TmrocoResource();
    }
}
