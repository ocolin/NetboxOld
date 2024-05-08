<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\FrontPorts as Data;
use Cruzio\lib\Netbox\Models\DCIM\FrontPorts as Model;
use Cruzio\lib\Netbox\Params\DCIM\FrontPorts as Params;

class FrontPorts extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}