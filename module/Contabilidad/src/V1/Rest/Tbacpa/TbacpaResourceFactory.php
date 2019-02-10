<?php
namespace Contabilidad\V1\Rest\Tbacpa;

class TbacpaResourceFactory
{
    public function __invoke($services)
    {
        return new TbacpaResource();
    }
}
