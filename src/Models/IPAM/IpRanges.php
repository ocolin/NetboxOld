<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class IpRanges extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'ip-ranges/';
    }



/* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Get an individual IP
*
* @param integer $id Numerical ID of IP record.
* @param array   $params Optional GET parameters.
* @param array   $headers Optional request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function getDetail( 
          int $id, 
        array $params  = [], 
        array $headers = [] 
    ) : array
    {
        $this->uri .= "{$id}/";

        return $this->http->get(
               uri: $this->uri,
            params: $params,
           headers: $headers
        );
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single IP.
*
* @param string $start_address First IP address of range. 
* @param string $end_address Last IP address of range. 
* @param array  $data Optionsl data to be sent.
* @param array  $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $start_address,
        string $end_address,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['start_address'] = $start_address;
        $data['end_address']   = $end_address;

        return $this->http->post(
              uri: $this->uri,
             body: $data,
          headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update IP
* 
* @param integer $id Numerical ID of IP to update.
* @param string  $start_address First IP address of range. 
* @param string  $end_address Last IP address of range. 
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $start_address,
        string $end_address,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['start_address'] = $start_address;
        $data['end_address']   = $end_address;

        return $this->http->put(
              uri: $this->uri,
             body: $data,
          headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update IP value(s).
*
* @param integer $id Numerical ID of IP to update.
* @param string  $start_address First IP address of range. 
* @param string  $end_address Last IP address of range. 
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $start_address,
        string $end_address,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['start_address'] = $start_address;
        $data['end_address']   = $end_address;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
