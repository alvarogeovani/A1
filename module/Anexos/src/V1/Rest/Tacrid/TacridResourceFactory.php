<?php
namespace Anexos\V1\Rest\Tacrid;

class TacridResourceFactory
{
    public function __invoke($services)
    {
        return new TacridResource();
    }
}
