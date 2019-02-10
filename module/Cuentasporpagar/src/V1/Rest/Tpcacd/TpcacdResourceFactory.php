<?php
namespace Cuentasporpagar\V1\Rest\Tpcacd;

class TpcacdResourceFactory
{
    public function __invoke($services)
    {
        return new TpcacdResource();
    }
}
