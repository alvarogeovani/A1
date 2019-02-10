<?php
namespace Nomina\V1\Rest\Tmldir;

class TmldirResourceFactory
{
    public function __invoke($services)
    {
        return new TmldirResource();
    }
}
