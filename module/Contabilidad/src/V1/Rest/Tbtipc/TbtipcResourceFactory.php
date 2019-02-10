<?php
namespace Contabilidad\V1\Rest\Tbtipc;

class TbtipcResourceFactory
{
    public function __invoke($services)
    {
        return new TbtipcResource();
    }
}
