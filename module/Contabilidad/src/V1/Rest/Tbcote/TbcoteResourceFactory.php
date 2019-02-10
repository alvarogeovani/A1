<?php
namespace Contabilidad\V1\Rest\Tbcote;

class TbcoteResourceFactory
{
    public function __invoke($services)
    {
        return new TbcoteResource();
    }
}
