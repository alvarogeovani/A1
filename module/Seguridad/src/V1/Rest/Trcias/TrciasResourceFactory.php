<?php
namespace Seguridad\V1\Rest\Trcias;

class TrciasResourceFactory
{
    public function __invoke($services)
    {
        return new TrciasResource();
    }
}