<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\DCIM;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\DCIM\Manufacturers as Data;
use Cruzio\lib\Netbox\Models\DCIM\Manufacturers as Model;
use Cruzio\lib\Netbox\Params\DCIM\Manufacturers as Params;

class Manufacturers extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}