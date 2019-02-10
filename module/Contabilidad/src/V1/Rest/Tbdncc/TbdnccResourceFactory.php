<?php
namespace Contabilidad\V1\Rest\Tbdncc;

class TbdnccResourceFactory
{
    public function __invoke($services)
    {
        return new TbdnccResource();
    }
}
