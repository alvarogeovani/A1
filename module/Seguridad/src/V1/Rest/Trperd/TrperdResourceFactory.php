<?php
namespace Seguridad\V1\Rest\Trperd;

class TrperdResourceFactory
{
    public function __invoke($services)
    {
        return new TrperdResource();
    }
}
