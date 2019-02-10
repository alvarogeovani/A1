<?php
namespace Contabilidad\V1\Rest\Tbasah;

class TbasahResourceFactory
{
    public function __invoke($services)
    {
        return new TbasahResource();
    }
}
