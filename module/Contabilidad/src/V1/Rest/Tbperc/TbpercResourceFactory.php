<?php
namespace Contabilidad\V1\Rest\Tbperc;

class TbpercResourceFactory
{
    public function __invoke($services)
    {
        return new TbpercResource();
    }
}
