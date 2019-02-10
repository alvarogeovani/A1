<?php
namespace Contabilidad\V1\Rest\Tbenco;

class TbencoResourceFactory
{
    public function __invoke($services)
    {
        return new TbencoResource();
    }
}
