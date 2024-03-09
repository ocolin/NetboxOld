<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\DCIM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Response;
use Cruzio\lib\Netbox\Models\Models_Core;

abstract class DCIM_Core extends Models_Core
{
    public function __construct( HTTP $http = null )
    {
        $this->uri = 'dcim/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
