<?php
namespace Nomina\V1\Rest\Tmhfco;

class TmhfcoResourceFactory
{
    public function __invoke($services)
    {
        return new TmhfcoResource();
    }
}
