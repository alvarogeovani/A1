<?php
namespace Seguridad\V1\Rest\Trpref;
use Seguridad\Repository\ITrprefRepository;
class TrprefResourceFactory
{
    public function __invoke($services)
    {
        $mapper = $services->get(ITrprefRepository::class);
        return new TrprefResource($mapper);
    }
}
