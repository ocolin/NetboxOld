<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\IPAM\VlanGroups as Data;
use Cruzio\lib\Netbox\Models\IPAM\VlanGroups as Model;
use Cruzio\lib\Netbox\Params\IPAM\VlanGroups as Params;

class VlanGroups extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}