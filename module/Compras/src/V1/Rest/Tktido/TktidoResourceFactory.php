<?php
namespace Compras\V1\Rest\Tktido;

class TktidoResourceFactory
{
    public function __invoke($services)
    {
        return new TktidoResource();
    }
}
