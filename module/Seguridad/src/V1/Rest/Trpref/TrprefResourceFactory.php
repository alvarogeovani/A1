<?php
namespace Seguridad\V1\Rest\Trpref;

class TrprefResourceFactory
{
    public function __invoke($services)
    {
        return new TrprefResource();
    }
}
