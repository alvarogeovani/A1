<?php
namespace Seguridad\V1\Rest\Trdife;

class TrdifeResourceFactory
{
    public function __invoke($services)
    {
        return new TrdifeResource();
    }
}
