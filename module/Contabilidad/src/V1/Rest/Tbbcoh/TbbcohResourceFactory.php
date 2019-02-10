<?php
namespace Contabilidad\V1\Rest\Tbbcoh;

class TbbcohResourceFactory
{
    public function __invoke($services)
    {
        return new TbbcohResource();
    }
}
