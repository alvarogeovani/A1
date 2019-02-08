<?php
namespace Seguridad\V1\Rest\Tresoh;
use Seguridad\Repository\ITresohRepository;
class TresohResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITresohRepository::class);
        return new TresohResource($mapper);
    }
}
