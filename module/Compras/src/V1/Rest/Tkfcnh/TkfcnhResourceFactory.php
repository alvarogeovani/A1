<?php
namespace Compras\V1\Rest\Tkfcnh;

class TkfcnhResourceFactory
{
    public function __invoke($services)
    {
        return new TkfcnhResource();
    }
}
