<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class Circuits
{
    protected HTTP $http;

    protected string $uri = 'circuits/';

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
