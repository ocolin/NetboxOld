<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;

class Extras
{
    protected string $uri = 'extras/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
