<?php

declare( strict_types=1 );

namespace Cruzio\Netbox\Models\Wireless;

use Cruzio\Netbox\Models\HTTP;

class Wireless
{
    protected string $uri = 'wireless/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
