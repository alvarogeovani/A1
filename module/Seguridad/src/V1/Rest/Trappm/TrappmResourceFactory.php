<?php

namespace Seguridad\V1\Rest\Trappm;

use Seguridad\Repository\ITrappmRepository;

class TrappmResourceFactory {

    public function __invoke($services) {
        $mapper = $services->get(ITrappmRepository::class);
        return new TrappmResource($mapper);
    }

}
