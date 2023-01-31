<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Tenancy;

use Cruzio\Netbox\Models\HTTP;

class TenantGroups extends Tenancy
{

/*
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'tenant-groups/';
    }


/* GET METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $params
 * @param array $headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function get( array $params = [], array $headers = [] ) : array
    {
        return $this->http->get(
                uri: $this->uri,
             params: $params,
            headers: $headers
        );
    }



/* POST METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function post(
        array $data,
        array $params  = [],
        array $headers = []
    ) : array
    {
        return $this->http->post(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* PUT METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function put(
        array $data,
        array $params  = [],
        array $headers = []
    ) : array
    {
        return $this->http->put(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* PATCH METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $data Data to send ibn request
 * @param array $params URI parameters
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patch(
        array $data,
        array $params  = [],
        array $headers = []
    ) : array
    {
        return $this->http->put(
                uri: $this->uri,
               body: $data,
             params: $params,
            headers: $headers
        );
    }



/* DELETE METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function delete( array $headers = [] ) : array
    {
        return $this->http->get( uri: $this->uri, headers: $headers );
    }



/* OPTIONS METHOD
---------------------------------------------------------------------------- */

/*
 *
 *
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function options( array $headers = [] ) : array
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }
}
