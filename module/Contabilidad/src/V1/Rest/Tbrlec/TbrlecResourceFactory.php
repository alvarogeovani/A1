<?php
namespace Contabilidad\V1\Rest\Tbrlec;

class TbrlecResourceFactory
{
    public function __invoke($services)
    {
        return new TbrlecResource();
    }
}
