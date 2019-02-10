<?php
namespace Nomina\V1\Rest\Tmpemh;

class TmpemhResourceFactory
{
    public function __invoke($services)
    {
        return new TmpemhResource();
    }
}
