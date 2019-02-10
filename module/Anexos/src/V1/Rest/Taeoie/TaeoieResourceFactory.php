<?php
namespace Anexos\V1\Rest\Taeoie;

class TaeoieResourceFactory
{
    public function __invoke($services)
    {
        return new TaeoieResource();
    }
}
