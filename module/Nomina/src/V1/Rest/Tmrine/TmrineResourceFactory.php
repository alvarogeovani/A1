<?php
namespace Nomina\V1\Rest\Tmrine;

class TmrineResourceFactory
{
    public function __invoke($services)
    {
        return new TmrineResource();
    }
}
