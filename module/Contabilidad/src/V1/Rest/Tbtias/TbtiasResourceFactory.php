<?php
namespace Contabilidad\V1\Rest\Tbtias;

class TbtiasResourceFactory
{
    public function __invoke($services)
    {
        return new TbtiasResource();
    }
}
