<?php
namespace Nomina\V1\Rest\Tmpifh;

class TmpifhResourceFactory
{
    public function __invoke($services)
    {
        return new TmpifhResource();
    }
}
