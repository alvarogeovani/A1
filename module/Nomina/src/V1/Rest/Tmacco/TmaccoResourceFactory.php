<?php
namespace Nomina\V1\Rest\Tmacco;

class TmaccoResourceFactory
{
    public function __invoke($services)
    {
        return new TmaccoResource();
    }
}
