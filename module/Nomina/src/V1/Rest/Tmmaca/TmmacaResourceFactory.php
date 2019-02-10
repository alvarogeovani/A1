<?php
namespace Nomina\V1\Rest\Tmmaca;

class TmmacaResourceFactory
{
    public function __invoke($services)
    {
        return new TmmacaResource();
    }
}
