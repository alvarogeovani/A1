<?php
namespace Contabilidad\V1\Rest\Ttbecoc;

class TtbecocResourceFactory
{
    public function __invoke($services)
    {
        return new TtbecocResource();
    }
}
