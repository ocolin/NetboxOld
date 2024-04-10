<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Virtualization\ClusterTypes as Data;
use Cruzio\lib\Netbox\Models\Virtualization\ClusterTypes as Model;
use Cruzio\lib\Netbox\Params\Virtualization\ClusterTypes as Params;

class ClusterTypes extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}