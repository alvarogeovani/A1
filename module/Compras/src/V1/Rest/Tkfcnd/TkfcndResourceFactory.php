<?php
namespace Compras\V1\Rest\Tkfcnd;

class TkfcndResourceFactory
{
    public function __invoke($services)
    {
        return new TkfcndResource();
    }
}
