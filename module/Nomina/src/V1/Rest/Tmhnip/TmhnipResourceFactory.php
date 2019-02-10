<?php
namespace Nomina\V1\Rest\Tmhnip;

class TmhnipResourceFactory
{
    public function __invoke($services)
    {
        return new TmhnipResource();
    }
}
