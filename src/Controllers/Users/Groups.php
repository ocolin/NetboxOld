<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Users\Groups as Data;
use Cruzio\lib\Netbox\Models\Users\Groups as Model;
use Cruzio\lib\Netbox\Params\Users\Groups as Params;

class Groups extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}