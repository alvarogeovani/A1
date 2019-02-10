<?php
namespace Nomina\V1\Rest\Tmdtpc;

class TmdtpcResourceFactory
{
    public function __invoke($services)
    {
        return new TmdtpcResource();
    }
}
