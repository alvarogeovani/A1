<?php
namespace Seguridad\V1\Rest\Trhpah;

class TrhpahResourceFactory
{
    public function __invoke($services)
    {
        return new TrhpahResource();
    }
}
