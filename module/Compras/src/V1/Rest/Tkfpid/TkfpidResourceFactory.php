<?php
namespace Compras\V1\Rest\Tkfpid;

class TkfpidResourceFactory
{
    public function __invoke($services)
    {
        return new TkfpidResource();
    }
}
