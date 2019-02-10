<?php
namespace Contabilidad\V1\Rest\Tbbcos;

class TbbcosResourceFactory
{
    public function __invoke($services)
    {
        return new TbbcosResource();
    }
}
