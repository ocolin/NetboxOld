<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Wireless;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Wireless\WirelessLinks as Data;
use Cruzio\lib\Netbox\Models\Wireless\WirelessLinks as Model;
use Cruzio\lib\Netbox\Params\Wireless\WirelessLinks as Params;

class WirelessLinks extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}