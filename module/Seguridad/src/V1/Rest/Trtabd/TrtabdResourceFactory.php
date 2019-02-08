<?php
namespace Seguridad\V1\Rest\Trtabd;
use Seguridad\Repository\ITrtabdRepository;
class TrtabdResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrtabdRepository::class);
        return new TrtabdResource($mapper);
    }
}
