<?php
namespace Anexos\V1\Rest\Taafyf;

class TaafyfResourceFactory
{
    public function __invoke($services)
    {
        return new TaafyfResource();
    }
}
