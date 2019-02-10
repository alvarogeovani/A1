<?php
namespace Nomina\V1\Rest\Tmmaih;

class TmmaihResourceFactory
{
    public function __invoke($services)
    {
        return new TmmaihResource();
    }
}
