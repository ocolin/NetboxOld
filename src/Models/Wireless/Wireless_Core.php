<?php

declare( strict_types=1 );

namespace Cruzio\lib\Netbox\Models\Wireless;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;

abstract class Wireless_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'wireless/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }

}
