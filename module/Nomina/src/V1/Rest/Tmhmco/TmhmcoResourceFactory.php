<?php
namespace Nomina\V1\Rest\Tmhmco;

class TmhmcoResourceFactory
{
    public function __invoke($services)
    {
        return new TmhmcoResource();
    }
}
