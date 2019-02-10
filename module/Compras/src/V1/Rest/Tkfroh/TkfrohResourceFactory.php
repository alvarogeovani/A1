<?php
namespace Compras\V1\Rest\Tkfroh;

class TkfrohResourceFactory
{
    public function __invoke($services)
    {
        return new TkfrohResource();
    }
}
