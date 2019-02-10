<?php
namespace Contabilidad\V1\Rest\Tbefdf;

class TbefdfResourceFactory
{
    public function __invoke($services)
    {
        return new TbefdfResource();
    }
}
