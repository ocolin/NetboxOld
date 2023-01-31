<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Tenancy;

use Cruzio\Netbox\Models\HTTP;

class Tenancy
{
    protected string $uri = 'tenancy/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
