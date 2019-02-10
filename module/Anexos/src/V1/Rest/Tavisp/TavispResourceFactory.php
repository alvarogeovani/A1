<?php
namespace Anexos\V1\Rest\Tavisp;

class TavispResourceFactory
{
    public function __invoke($services)
    {
        return new TavispResource();
    }
}
