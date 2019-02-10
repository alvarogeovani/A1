<?php
namespace Contabilidad\V1\Rest\Tbmone;

class TbmoneResourceFactory
{
    public function __invoke($services)
    {
        return new TbmoneResource();
    }
}
