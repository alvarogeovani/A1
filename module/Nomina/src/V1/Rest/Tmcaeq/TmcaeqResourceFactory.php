<?php
namespace Nomina\V1\Rest\Tmcaeq;

class TmcaeqResourceFactory
{
    public function __invoke($services)
    {
        return new TmcaeqResource();
    }
}
