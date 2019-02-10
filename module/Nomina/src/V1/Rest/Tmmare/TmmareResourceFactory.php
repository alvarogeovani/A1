<?php
namespace Nomina\V1\Rest\Tmmare;

class TmmareResourceFactory
{
    public function __invoke($services)
    {
        return new TmmareResource();
    }
}
