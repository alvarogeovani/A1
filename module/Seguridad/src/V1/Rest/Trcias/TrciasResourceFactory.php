<?php

namespace Seguridad\V1\Rest\Trcias;

use Seguridad\Repository\ITrciasRepository;

class TrciasResourceFactory {

    public function __invoke($services) {
        $mapper = $services->get(ITrciasRepository::class);
        return new TrciasResource($mapper);
    }

}
