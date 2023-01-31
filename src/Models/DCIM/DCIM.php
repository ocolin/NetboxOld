<?php

declare( stritct_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class DCIM
{
    protected string $uri = 'dcim/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
