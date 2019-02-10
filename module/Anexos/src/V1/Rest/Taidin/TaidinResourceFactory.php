<?php
namespace Anexos\V1\Rest\Taidin;

class TaidinResourceFactory
{
    public function __invoke($services)
    {
        return new TaidinResource();
    }
}
