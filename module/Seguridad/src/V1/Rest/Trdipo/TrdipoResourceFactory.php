<?php
namespace Seguridad\V1\Rest\Trdipo;
use Seguridad\Repository\ITrdipoRepository;
class TrdipoResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrdipoRepository::class);
        return new TrdipoResource($mapper);
    }
}
