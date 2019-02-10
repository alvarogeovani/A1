<?php
namespace Contabilidad\V1\Rest\Tbtido;

class TbtidoResourceFactory
{
    public function __invoke($services)
    {
        return new TbtidoResource();
    }
}
