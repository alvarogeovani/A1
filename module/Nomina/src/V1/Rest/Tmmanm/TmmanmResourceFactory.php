<?php
namespace Nomina\V1\Rest\Tmmanm;

class TmmanmResourceFactory
{
    public function __invoke($services)
    {
        return new TmmanmResource();
    }
}
