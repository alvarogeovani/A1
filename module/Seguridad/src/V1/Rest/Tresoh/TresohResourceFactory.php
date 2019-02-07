<?php
namespace Seguridad\V1\Rest\Tresoh;

class TresohResourceFactory
{
    public function __invoke($services)
    {
        return new TresohResource();
    }
}
