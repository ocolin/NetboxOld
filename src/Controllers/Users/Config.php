<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Users;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Models\Users\Config as Model;

class Config extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
    }
}