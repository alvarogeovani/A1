<?php
namespace Contabilidad\V1\Rest\Tbbcod;

class TbbcodResourceFactory
{
    public function __invoke($services)
    {
        return new TbbcodResource();
    }
}
