<?php
namespace Cuentasporpagar\V1\Rest\Tpecxp;

class TpecxpResourceFactory
{
    public function __invoke($services)
    {
        return new TpecxpResource();
    }
}
