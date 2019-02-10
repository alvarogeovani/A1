<?php
namespace Anexos\V1\Rest\Tacrih;

class TacrihResourceFactory
{
    public function __invoke($services)
    {
        return new TacrihResource();
    }
}
