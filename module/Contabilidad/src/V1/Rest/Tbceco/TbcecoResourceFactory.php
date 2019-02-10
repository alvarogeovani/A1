<?php
namespace Contabilidad\V1\Rest\Tbceco;

class TbcecoResourceFactory
{
    public function __invoke($services)
    {
        return new TbcecoResource();
    }
}
