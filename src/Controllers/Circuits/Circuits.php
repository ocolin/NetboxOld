<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Controllers\Circuits;

use Cruzio\lib\Netbox\Controllers\Controllers_Core;
use Cruzio\lib\Netbox\Models\Circuits\Circuits AS Model;
use Cruzio\lib\Netbox\Data\Circuits\Circuits AS Data;
use Cruzio\lib\Netbox\Params\ParamsInterface;

class Circuits extends Controllers_Core
{
    public function __construct()
    {
        $this->model = new Model();
    }
    public function get( ParamsInterface|array $params = null, int $id = null )
    {
        if( !$params instanceof ParamsInterface ) {

        }
    }
}