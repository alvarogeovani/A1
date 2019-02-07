<?php
namespace Seguridad\V1\Rest\Trpriv;

class TrprivResourceFactory
{
    public function __invoke($services)
    {
        return new TrprivResource();
    }
}
