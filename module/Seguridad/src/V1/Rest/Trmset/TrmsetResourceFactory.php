<?php
namespace Seguridad\V1\Rest\Trmset;

class TrmsetResourceFactory
{
    public function __invoke($services)
    {
        return new TrmsetResource();
    }
}
