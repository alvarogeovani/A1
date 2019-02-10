<?php
namespace Contabilidad\V1\Rest\Tbbcom;

class TbbcomResourceFactory
{
    public function __invoke($services)
    {
        return new TbbcomResource();
    }
}
