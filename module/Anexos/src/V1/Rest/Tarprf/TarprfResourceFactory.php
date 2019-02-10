<?php
namespace Anexos\V1\Rest\Tarprf;

class TarprfResourceFactory
{
    public function __invoke($services)
    {
        return new TarprfResource();
    }
}
