<?php
namespace Seguridad\V1\Rest\Trmodl;

class TrmodlResourceFactory
{
    public function __invoke($services)
    {
        return new TrmodlResource();
    }
}
