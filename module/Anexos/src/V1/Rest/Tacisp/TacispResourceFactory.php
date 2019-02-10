<?php
namespace Anexos\V1\Rest\Tacisp;

class TacispResourceFactory
{
    public function __invoke($services)
    {
        return new TacispResource();
    }
}
