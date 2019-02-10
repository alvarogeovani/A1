<?php
namespace Contabilidad\V1\Rest\Tbasrh;

class TbasrhResourceFactory
{
    public function __invoke($services)
    {
        return new TbasrhResource();
    }
}
