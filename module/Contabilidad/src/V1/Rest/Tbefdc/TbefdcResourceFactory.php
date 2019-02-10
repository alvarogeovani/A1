<?php
namespace Contabilidad\V1\Rest\Tbefdc;

class TbefdcResourceFactory
{
    public function __invoke($services)
    {
        return new TbefdcResource();
    }
}
