<?php

declare( strict_types=1 );

namespace Cruzio\Netbox\Models\Virtualization;

use Cruzio\Netbox\Models\HTTP;

class Virtualization
{
    protected string $uri = 'virtualization/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
