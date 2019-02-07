<?php
namespace Seguridad\V1\Rest\Trhpad;

class TrhpadResourceFactory
{
    public function __invoke($services)
    {
        return new TrhpadResource();
    }
}
