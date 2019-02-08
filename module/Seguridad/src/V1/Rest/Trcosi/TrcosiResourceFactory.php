<?php
namespace Seguridad\V1\Rest\Trcosi;
use Seguridad\Repository\ITrcosiRepository;
class TrcosiResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrcosiRepository::class);
        return new TrcosiResource($mapper);
    }
}
