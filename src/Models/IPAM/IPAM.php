<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class IPAM
{
    protected HTTP $http;

    protected $uri = 'ipam/';

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
