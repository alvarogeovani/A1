<?php
namespace Seguridad\V1\Rest\Trdife;
use Seguridad\Repository\ITrdifeRepository;
class TrdifeResourceFactory
{
    public function __invoke($services)
    {
       $mapper = $services->get(ITrdifeRepository::class);
        return new TrdifeResource($mapper);
    }
}
