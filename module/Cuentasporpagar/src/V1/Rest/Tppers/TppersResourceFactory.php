<?php
namespace Cuentasporpagar\V1\Rest\Tppers;

class TppersResourceFactory
{
    public function __invoke($services)
    {
        return new TppersResource();
    }
}
