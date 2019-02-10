<?php
namespace Nomina\V1\Rest\Tmnoip;

class TmnoipResourceFactory
{
    public function __invoke($services)
    {
        return new TmnoipResource();
    }
}
