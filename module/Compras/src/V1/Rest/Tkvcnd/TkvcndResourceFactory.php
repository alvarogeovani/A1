<?php
namespace Compras\V1\Rest\Tkvcnd;

class TkvcndResourceFactory
{
    public function __invoke($services)
    {
        return new TkvcndResource();
    }
}
