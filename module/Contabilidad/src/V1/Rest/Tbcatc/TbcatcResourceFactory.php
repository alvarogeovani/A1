<?php
namespace Contabilidad\V1\Rest\Tbcatc;

class TbcatcResourceFactory
{
    public function __invoke($services)
    {
        return new TbcatcResource();
    }
}
