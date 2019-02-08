<?php
namespace Seguridad\V1\Rest\Trreer;
use Seguridad\Repository\ITrreerRepository;
class TrreerResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrreerRepository::class);
        return new TrreerResource($mapper);
    }
}
