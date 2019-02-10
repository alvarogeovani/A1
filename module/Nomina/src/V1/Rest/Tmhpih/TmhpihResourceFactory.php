<?php
namespace Nomina\V1\Rest\Tmhpih;

class TmhpihResourceFactory
{
    public function __invoke($services)
    {
        return new TmhpihResource();
    }
}
