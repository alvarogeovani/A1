<?php
namespace Cuentasporpagar\V1\Rest\Tpcach;

class TpcachResourceFactory
{
    public function __invoke($services)
    {
        return new TpcachResource();
    }
}
