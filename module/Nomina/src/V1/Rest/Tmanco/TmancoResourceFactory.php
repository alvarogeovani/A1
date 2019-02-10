<?php
namespace Nomina\V1\Rest\Tmanco;

class TmancoResourceFactory
{
    public function __invoke($services)
    {
        return new TmancoResource();
    }
}
