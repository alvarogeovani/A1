<?php
namespace Anexos\V1\Rest\Tatcir;

class TatcirResourceFactory
{
    public function __invoke($services)
    {
        return new TatcirResource();
    }
}
