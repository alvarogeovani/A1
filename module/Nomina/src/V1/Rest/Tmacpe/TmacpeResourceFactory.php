<?php
namespace Nomina\V1\Rest\Tmacpe;

class TmacpeResourceFactory
{
    public function __invoke($services)
    {
        return new TmacpeResource();
    }
}
