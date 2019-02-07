<?php
namespace Seguridad\V1\Rest\Tropch;

class TropchResourceFactory
{
    public function __invoke($services)
    {
        return new TropchResource();
    }
}
