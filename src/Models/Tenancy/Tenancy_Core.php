<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Tenancy;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;

abstract class Tenancy_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'tenancy/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
