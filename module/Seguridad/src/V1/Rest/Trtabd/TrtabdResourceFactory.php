<?php
namespace Seguridad\V1\Rest\Trtabd;

class TrtabdResourceFactory
{
    public function __invoke($services)
    {
        return new TrtabdResource();
    }
}
