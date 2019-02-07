<?php
namespace Seguridad\V1\Rest\Tresod;

class TresodResourceFactory
{
    public function __invoke($services)
    {
        return new TresodResource();
    }
}
