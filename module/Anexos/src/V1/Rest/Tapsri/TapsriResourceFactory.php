<?php
namespace Anexos\V1\Rest\Tapsri;

class TapsriResourceFactory
{
    public function __invoke($services)
    {
        return new TapsriResource();
    }
}
