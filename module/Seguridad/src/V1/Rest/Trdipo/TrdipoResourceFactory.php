<?php
namespace Seguridad\V1\Rest\Trdipo;

class TrdipoResourceFactory
{
    public function __invoke($services)
    {
        return new TrdipoResource();
    }
}
