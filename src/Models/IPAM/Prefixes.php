<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Prefixes extends IPAM
{

/* CONSTRUCTOR
---------------------------------------------------------------------------- */

    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'prefixes/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
 * Create a single prefix.
 *
 * @param string $prefix IP Subnet. ex prefix: '1.1.1.0/24'
 * @param array  $data optionsl data to be sent
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/
    
    public function postDetail(
        string $prefix,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['prefix'] = $prefix;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
 * Update prefix
 *
 * @param string  $prefix IP Subnet. ex prefix: '1.1.1.0/24'
 * @param integer $id Numerical ID of prefix to update
 * @param array   $data Data to send ibn request
 * @param array   $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
       string $prefix,
          int $id,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['prefix'] = $prefix;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
 * Update prefix value(s).
 *
 * @param integer $id Numerical ID of prefix to update.
 * @param array   $data Optional data to modify.
 * @param array   $headers HTML request headers.
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
       string $prefix,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['prefix'] = $prefix;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
