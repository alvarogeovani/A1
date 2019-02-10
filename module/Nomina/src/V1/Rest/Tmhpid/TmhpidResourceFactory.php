<?php
namespace Nomina\V1\Rest\Tmhpid;

class TmhpidResourceFactory
{
    public function __invoke($services)
    {
        return new TmhpidResource();
    }
}
