<?php
namespace Seguridad\V1\Rest\Trusua;

class TrusuaResourceFactory
{
    public function __invoke($services)
    {
        return new TrusuaResource();
    }
}
