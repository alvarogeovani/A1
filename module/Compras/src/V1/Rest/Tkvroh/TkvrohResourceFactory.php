<?php
namespace Compras\V1\Rest\Tkvroh;

class TkvrohResourceFactory
{
    public function __invoke($services)
    {
        return new TkvrohResource();
    }
}
