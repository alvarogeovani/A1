<?php
namespace Anexos\V1\Rest\Tareca;

class TarecaResourceFactory
{
    public function __invoke($services)
    {
        return new TarecaResource();
    }
}
