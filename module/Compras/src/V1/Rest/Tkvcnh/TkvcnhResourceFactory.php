<?php
namespace Compras\V1\Rest\Tkvcnh;

class TkvcnhResourceFactory
{
    public function __invoke($services)
    {
        return new TkvcnhResource();
    }
}
