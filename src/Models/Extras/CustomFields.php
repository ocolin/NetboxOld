<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;

class CustomFields extends Extras
{
    public function __construct()
    {
        parent::__construct( http: $http );
        $this->uri .= 'custom-fields/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Custom Field.
*
* @param array  $content_types Array of content types.
* @param array  $data optional data to be sent.
* @param array  $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
         array $content_types,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['content_types'] = $content_types;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Custom Field
* 
* @param integer $id Numerical ID of Custom Field to update.
* @param array  $content_types Array of content types.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
         array $content_types,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['content_types'] = $content_types;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Custom Field value(s).
*
* @param integer $id Numerical ID of Custom Field to update.
* @param array  $content_types Array of content types.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
         array $content_types,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['content_types'] = $content_types;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
