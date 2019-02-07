<?php
namespace Seguridad\V1\Rest\Trdepr;

class TrdeprResourceFactory
{
    public function __invoke($services)
    {
        return new TrdeprResource();
    }
}
