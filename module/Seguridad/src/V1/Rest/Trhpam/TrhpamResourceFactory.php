<?php
namespace Seguridad\V1\Rest\Trhpam;

class TrhpamResourceFactory
{
    public function __invoke($services)
    {
        return new TrhpamResource();
    }
}
