<?php
namespace Contabilidad\V1\Rest\Tbtiac;

class TbtiacResourceFactory
{
    public function __invoke($services)
    {
        return new TbtiacResource();
    }
}
