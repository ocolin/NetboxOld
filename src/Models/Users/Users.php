<?php

declare( strict_types=1 );

namespace Cruzio\Netbox\Models\Users;

use Cruzio\Netbox\Models\HTTP;

class Users
{
    protected string $uri = 'users/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
    }
}
