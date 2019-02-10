<?php
namespace Contabilidad\V1\Rest\Tbefin;

class TbefinResourceFactory
{
    public function __invoke($services)
    {
        return new TbefinResource();
    }
}
