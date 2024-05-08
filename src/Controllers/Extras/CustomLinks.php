<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Extras\CustomLinks as Data;
use Cruzio\lib\Netbox\Models\Extras\CustomLinks as Model;
use Cruzio\lib\Netbox\Params\Extras\CustomLinks as Params;

class CustomLinks extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}