<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Sites extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'sites/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Site.
*
* @param string $name Name of Site.
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
* Update Site
* 
* @param integer $id Numerical ID of Site to update.
* @param string  $name Name of Site to update.
* @param string  $slug Slug of Site to update.
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
* Update Site value(s).
*
* @param integer $id Numerical ID of Site to update.
* @param string  $name Name of Site to update.
* @param string  $slug Slug of Site to update.
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
