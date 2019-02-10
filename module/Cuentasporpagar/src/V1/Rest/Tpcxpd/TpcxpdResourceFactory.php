<?php
namespace Cuentasporpagar\V1\Rest\Tpcxpd;

class TpcxpdResourceFactory
{
    public function __invoke($services)
    {
        return new TpcxpdResource();
    }
}
