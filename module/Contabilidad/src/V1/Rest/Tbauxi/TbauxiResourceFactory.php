<?php
namespace Contabilidad\V1\Rest\Tbauxi;

class TbauxiResourceFactory
{
    public function __invoke($services)
    {
        return new TbauxiResource();
    }
}
