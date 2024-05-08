<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Tenancy;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Tenancy\TenantGroups as Data;
use Cruzio\lib\Netbox\Models\Tenancy\TenantGroups as Model;
use Cruzio\lib\Netbox\Params\Tenancy\TenantGroups as Params;

class TenantGroups extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}