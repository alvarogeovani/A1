<?php
namespace Compras\V1\Rest\Tkvpig;

class TkvpigResourceFactory
{
    public function __invoke($services)
    {
        return new TkvpigResource();
    }
}
