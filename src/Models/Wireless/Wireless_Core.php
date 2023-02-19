<?php

declare( strict_types=1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Models\Models_Core;

abstract class Wireless_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'wireless/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
