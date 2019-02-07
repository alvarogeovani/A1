<?php
namespace Seguridad\V1\Rest\Trmsus;

class TrmsusResourceFactory
{
    public function __invoke($services)
    {
        return new TrmsusResource();
    }
}
