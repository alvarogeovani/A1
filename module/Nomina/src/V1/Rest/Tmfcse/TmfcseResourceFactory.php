<?php
namespace Nomina\V1\Rest\Tmfcse;

class TmfcseResourceFactory
{
    public function __invoke($services)
    {
        return new TmfcseResource();
    }
}
