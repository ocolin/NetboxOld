<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\Modules as Data;
use Cruzio\lib\Netbox\Models\DCIM\Modules as Model;
use Cruzio\lib\Netbox\Params\DCIM\Modules as Params;

class Modules extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}