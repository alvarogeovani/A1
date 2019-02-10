<?php
namespace Cuentasporpagar\V1\Rest\Tpprov;

class TpprovResourceFactory
{
    public function __invoke($services)
    {
        return new TpprovResource();
    }
}
