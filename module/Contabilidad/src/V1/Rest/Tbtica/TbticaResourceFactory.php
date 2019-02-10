<?php
namespace Contabilidad\V1\Rest\Tbtica;

class TbticaResourceFactory
{
    public function __invoke($services)
    {
        return new TbticaResource();
    }
}
