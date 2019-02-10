<?php
namespace Compras\V1\Rest\Tkfpih;

class TkfpihResourceFactory
{
    public function __invoke($services)
    {
        return new TkfpihResource();
    }
}
