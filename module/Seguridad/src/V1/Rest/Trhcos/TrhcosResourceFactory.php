<?php
namespace Seguridad\V1\Rest\Trhcos;

class TrhcosResourceFactory
{
    public function __invoke($services)
    {
        return new TrhcosResource();
    }
}
