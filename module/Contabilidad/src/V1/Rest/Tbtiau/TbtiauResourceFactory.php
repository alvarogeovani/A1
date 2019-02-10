<?php
namespace Contabilidad\V1\Rest\Tbtiau;

class TbtiauResourceFactory
{
    public function __invoke($services)
    {
        return new TbtiauResource();
    }
}
