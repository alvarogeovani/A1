<?php
namespace Compras\V1\Rest\Tkvpid;

class TkvpidResourceFactory
{
    public function __invoke($services)
    {
        return new TkvpidResource();
    }
}
