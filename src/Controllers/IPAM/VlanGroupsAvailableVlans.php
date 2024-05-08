<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\IPAM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\IPAM\VlanGroupsAvailableVlans as Data;
use Cruzio\lib\Netbox\Models\IPAM\VlanGroupsAvailableVlans as Model;
use Cruzio\lib\Netbox\Params\IPAM\VlanGroupsAvailableVlans as Params;

class VlanGroupsAvailableVlans extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}