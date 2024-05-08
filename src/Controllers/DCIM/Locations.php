<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\Locations as Data;
use Cruzio\lib\Netbox\Models\DCIM\Locations as Model;
use Cruzio\lib\Netbox\Params\DCIM\Locations as Params;

class Locations extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}