<?php

namespace Seguridad\V1\Rest\Trusua;

use Seguridad\Repository\ITrusuaRepository;

class TrusuaResourceFactory {

    public function __invoke($services) {
        $mapper = $services->get(ITrusuaRepository::class);
        return new TrusuaResource($mapper);
    }

}
