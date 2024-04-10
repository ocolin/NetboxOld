<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\ConsolePorts as Data;
use Cruzio\lib\Netbox\Models\DCIM\ConsolePorts AS Model;
use Cruzio\lib\Netbox\Params\DCIM\ConsolePorts as Params;

class ConsolePorts extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}