<?php
namespace Nomina\V1\Rest\Tmrinp;

class TmrinpResourceFactory
{
    public function __invoke($services)
    {
        return new TmrinpResource();
    }
}
