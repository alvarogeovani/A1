<?php
namespace Seguridad\V1\Rest\Ttcpag;

class TtcpagResourceFactory
{
    public function __invoke($services)
    {
        return new TtcpagResource();
    }
}
