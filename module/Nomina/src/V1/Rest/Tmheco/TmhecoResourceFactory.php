<?php
namespace Nomina\V1\Rest\Tmheco;

class TmhecoResourceFactory
{
    public function __invoke($services)
    {
        return new TmhecoResource();
    }
}
