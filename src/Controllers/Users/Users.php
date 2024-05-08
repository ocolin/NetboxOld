<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Users\Users as Data;
use Cruzio\lib\Netbox\Models\Users\Users as Model;
use Cruzio\lib\Netbox\Params\Users\Users as Params;

class Users extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}