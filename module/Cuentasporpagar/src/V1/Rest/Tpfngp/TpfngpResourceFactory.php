<?php
namespace Cuentasporpagar\V1\Rest\Tpfngp;

class TpfngpResourceFactory
{
    public function __invoke($services)
    {
        return new TpfngpResource();
    }
}
