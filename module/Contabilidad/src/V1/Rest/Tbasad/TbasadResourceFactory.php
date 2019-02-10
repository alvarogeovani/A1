<?php
namespace Contabilidad\V1\Rest\Tbasad;

class TbasadResourceFactory
{
    public function __invoke($services)
    {
        return new TbasadResource();
    }
}
