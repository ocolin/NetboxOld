<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class CircuitTypes extends CircuitsCore
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'circuit-types/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Circuit Type.
*
* @param string $name Name of Circuit Type.
* @param string $slug 
* @param array  $options optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Circuit Type
* 
* @param integer $id Numerical ID of Circuit Type to update.
* @param string  $name Name of Circuit Type to update.
* @param string  $slug Slug of Circuit Type to update.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Circuit Type value(s).
*
* @param integer $id Numerical ID of Circuit Type to update.
* @param string  $name Name of Circuit Type to update.
* @param string  $slug Slug of Circuit Type to update.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
        string $slug,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name'] = $name;
        $options['slug'] = $slug;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
