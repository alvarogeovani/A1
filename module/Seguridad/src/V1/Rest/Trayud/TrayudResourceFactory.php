<?php

namespace Seguridad\V1\Rest\Trayud;

use Seguridad\Repository\ITrayudRepository;

class TrayudResourceFactory {

    public function __invoke($services) {
        $mapper = $services->get(ITrayudRepository::class);
        return new TrayudResource($mapper);
    }

}
