<?php
namespace Seguridad\V1\Rest\Trreer;

class TrreerResourceFactory
{
    public function __invoke($services)
    {
        return new TrreerResource();
    }
}
