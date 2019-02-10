<?php
namespace Compras\V1\Rest\Tkfrod;

class TkfrodResourceFactory
{
    public function __invoke($services)
    {
        return new TkfrodResource();
    }
}
