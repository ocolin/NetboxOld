<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class IpAddresses extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'ip-addresses/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single IP.
*
* @param string $address IP address. 
* @param array  $data Optionsl data to be sent.
* @param array  $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $address,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['address'] = $address;

        return $this->http->post(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update IP
* 
* @param integer $id Numerical ID of IP to update.
* @param string  $address Address of IP to update.
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $address,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['address'] = $address;

        return $this->http->put(
              uri: $this->uri,
             body: $options,
          headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update IP value(s).
*
* @param integer $id Numerical ID of IP to update.
* @param string  $address Address of IP to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
       string $address,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['address'] = $address;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
