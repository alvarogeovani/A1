<?php
namespace Seguridad\V1\Rest\Tropcd;

class TropcdResourceFactory
{
    public function __invoke($services)
    {
        return new TropcdResource();
    }
}
