<?php
namespace Contabilidad\V1\Rest\Tbasrd;

class TbasrdResourceFactory
{
    public function __invoke($services)
    {
        return new TbasrdResource();
    }
}
