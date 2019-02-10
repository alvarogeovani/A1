<?php
namespace Contabilidad\V1\Rest\Tbtiga;

class TbtigaResourceFactory
{
    public function __invoke($services)
    {
        return new TbtigaResource();
    }
}
