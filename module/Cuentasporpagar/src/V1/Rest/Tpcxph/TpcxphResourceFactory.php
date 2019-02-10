<?php
namespace Cuentasporpagar\V1\Rest\Tpcxph;

class TpcxphResourceFactory
{
    public function __invoke($services)
    {
        return new TpcxphResource();
    }
}
