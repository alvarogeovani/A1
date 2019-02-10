<?php
namespace Nomina\V1\Rest\Tmpemd;

class TmpemdResourceFactory
{
    public function __invoke($services)
    {
        return new TmpemdResource();
    }
}
