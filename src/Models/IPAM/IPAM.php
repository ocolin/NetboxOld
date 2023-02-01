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


    
/* OPTIONS METHOD
---------------------------------------------------------------------------- */

/*
* List details about API call.
*
* @param array $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function options( array $headers = [] ) : array
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }
}
