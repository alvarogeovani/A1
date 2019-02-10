<?php
namespace Contabilidad\V1\Rest\Tbccon;

class TbcconResourceFactory
{
    public function __invoke($services)
    {
        return new TbcconResource();
    }
}
