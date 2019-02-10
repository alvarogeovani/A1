<?php
namespace Compras\V1\Rest\Tkfpig;

class TkfpigResourceFactory
{
    public function __invoke($services)
    {
        return new TkfpigResource();
    }
}
