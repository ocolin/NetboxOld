<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Virtualization\Clusters as Data;
use Cruzio\lib\Netbox\Models\Virtualization\Clusters as Model;
use Cruzio\lib\Netbox\Params\Virtualization\Clusters as Params;

class Clusters extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}