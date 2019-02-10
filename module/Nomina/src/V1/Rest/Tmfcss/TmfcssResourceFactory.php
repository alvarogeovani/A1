<?php
namespace Nomina\V1\Rest\Tmfcss;

class TmfcssResourceFactory
{
    public function __invoke($services)
    {
        return new TmfcssResource();
    }
}
