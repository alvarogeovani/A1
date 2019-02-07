<?php
namespace Seguridad\V1\Rest\Trcosi;

class TrcosiResourceFactory
{
    public function __invoke($services)
    {
        return new TrcosiResource();
    }
}
