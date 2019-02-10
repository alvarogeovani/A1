<?php
namespace Compras\V1\Rest\Tkvpih;

class TkvpihResourceFactory
{
    public function __invoke($services)
    {
        return new TkvpihResource();
    }
}
