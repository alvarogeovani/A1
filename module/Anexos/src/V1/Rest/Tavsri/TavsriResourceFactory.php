<?php
namespace Anexos\V1\Rest\Tavsri;

class TavsriResourceFactory
{
    public function __invoke($services)
    {
        return new TavsriResource();
    }
}
