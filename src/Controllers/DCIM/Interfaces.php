<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\Interfaces as Data;
use Cruzio\lib\Netbox\Models\DCIM\Interfaces as Model;
use Cruzio\lib\Netbox\Params\DCIM\Interfaces as Params;

class Interfaces extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}