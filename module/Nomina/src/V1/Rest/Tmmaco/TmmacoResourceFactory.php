<?php
namespace Nomina\V1\Rest\Tmmaco;

class TmmacoResourceFactory
{
    public function __invoke($services)
    {
        return new TmmacoResource();
    }
}
