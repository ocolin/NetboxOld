<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Models\Circuits\CircuitTerminationsPaths AS Model;
use Cruzio\lib\Netbox\Params\Circuits\CircuitTerminationsPaths as Params;

class CircuitTerminationsPaths extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
    }

}