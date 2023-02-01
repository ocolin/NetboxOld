<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class RackRoles extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'rack-roles/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Rack Role.
*
* @param string $name Name of Rack Role.
* @param string $slug 
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name'] = $name;
        $data['slug'] = $slug;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Rack Role
* 
* @param integer $id Numerical ID of Rack Role to update.
* @param string  $name Name of Rack Role to update.
* @param string  $slug Slug of Rack Role to update.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;
        $data['slug'] = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Rack Role value(s).
*
* @param integer $id Numerical ID of Rack Role to update.
* @param string  $name Name of Rack Role to update.
* @param string  $slug Slug of Rack Role to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;
        $data['slug'] = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
