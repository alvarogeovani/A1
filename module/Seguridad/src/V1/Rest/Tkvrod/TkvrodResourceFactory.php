<?php
namespace Seguridad\V1\Rest\Tkvrod;

class TkvrodResourceFactory
{
    public function __invoke($services)
    {
        return new TkvrodResource();
    }
}
