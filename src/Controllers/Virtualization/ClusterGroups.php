<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Virtualization;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Virtualization\ClusterGroups as Data;
use Cruzio\lib\Netbox\Models\Virtualization\ClusterGroups as Model;
use Cruzio\lib\Netbox\Params\Virtualization\ClusterGroups as Params;

class ClusterGroups extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}