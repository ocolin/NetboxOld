<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
//use Cruzio\lib\Netbox\Data\DCIM\ConnectedDevice as Data;
use Cruzio\lib\Netbox\Models\DCIM\ConnectedDevice as Model;
//use Cruzio\lib\Netbox\Params\DCIM\ConnectedDevice as Params;

class ConnectedDevice extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        //$this->params = new Params();
        //$this->data   = new Data();
    }
}