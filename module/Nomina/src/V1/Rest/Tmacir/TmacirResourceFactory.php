<?php
namespace Nomina\V1\Rest\Tmacir;

class TmacirResourceFactory
{
    public function __invoke($services)
    {
        return new TmacirResource();
    }
}
