<?php
namespace Seguridad\V1\Rest\Trtabh;

class TrtabhResourceFactory
{
    public function __invoke($services)
    {
        return new TrtabhResource();
    }
}
