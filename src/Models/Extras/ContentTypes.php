<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;

class ContentTypes
{
    public function __construct( HTTP $http = null )
    {
        $this->uri = 'extras/content-types/';
        $this->http = $http ?? new HTTP();
    }


/**
* List details about API call.
*
* @param array $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function options( array $headers = [] ) : array
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }



 /* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Get an individual object
*
* @param integer $id Numerical ID of an object record.
* @param array   $params Optional GET parameters.
* @param array   $headers Optional request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function getDetail( 
        array $params  = [], 
        array $headers = [],
          int $id = null
    ) : array
    {
        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }
}
