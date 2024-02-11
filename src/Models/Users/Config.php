<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\Users;

use Cruzio\lib\Netbox\Models\HTTP;

class Config extends Users_Core
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'config/';
    }



/* GET METHOD
---------------------------------------------------------------------------- */

/**
 * 
 * @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
 */
    public function get() : array
    {
        return $this->http->get( uri: $this->uri );
    }

}
