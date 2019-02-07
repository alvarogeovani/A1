<?php
namespace Seguridad\V1\Rest\Trperf;

class TrperfResourceFactory
{
    public function __invoke($services)
    {
        return new TrperfResource();
    }
}
