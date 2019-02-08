<?php
namespace Seguridad\V1\Rest\Tresod;
use Seguridad\Repository\ITresodRepository;
class TresodResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITresodRepository::class);
        return new TresodResource($mapper);
    }
}
