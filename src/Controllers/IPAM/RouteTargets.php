<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\IPAM\RouteTargets as Data;
use Cruzio\lib\Netbox\Models\IPAM\RouteTargets as Model;
use Cruzio\lib\Netbox\Params\IPAM\RouteTargets as Params;

class RouteTargets extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}