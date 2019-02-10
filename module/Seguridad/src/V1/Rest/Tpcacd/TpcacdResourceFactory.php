<?php
namespace Seguridad\V1\Rest\Tpcacd;

class TpcacdResourceFactory
{
    public function __invoke($services)
    {
        return new TpcacdResource();
    }
}
