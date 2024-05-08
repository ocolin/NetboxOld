<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Extras;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Data\Extras\ContentTypes as Data;
use Cruzio\lib\Netbox\Models\Extras\ContentTypes as Model;
use Cruzio\lib\Netbox\Params\Extras\ContentTypes as Params;

class ContentTypes extends Controllers_Core
{
    public function __construct()
    {
        $this->model  = new Model();
        $this->params = new Params();
        $this->data   = new Data();
    }
}