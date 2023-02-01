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


/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Get all IPs
 *
 * @param array $params Optional URL parameters.
 * @param array $headers Optional Custom HTTP request headers.
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function getList( 
        array $params  = [], 
        array $headers = [] 
    ) : array
    {

        return $this->http->get(
            uri: $this->uri,
            params: $params,
        headers: $headers
        );
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



/* POST METHOD LIST
---------------------------------------------------------------------------- */

/*
* Creat multiple IPs at once.
*
* @param array $data An array of IP arrays. 
* @param array $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postList(
        array $data,
        array $headers = []
    ) : array
    {
        return $this->http->post(
            uri: $this->uri,
            body: $data,
        headers: $headers
        );
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
        array $data    = [],
        array $headers = []
    ) : array
    {
        $data['address'] = $address;

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
* @param string  $address Address of IP to update.
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
        int $id,
        string $address,
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['address'] = $address;

        return $this->http->put(
            uri: $this->uri,
            body: $data,
        headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
* Updte an array of IPs.
*
* @param array $data List of IPs to update.
* @param array $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putList(
        array $data,
        array $headers = []
    ) : array
    {
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
* @param string  $address Address of IP to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
       string $address,
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['address'] = $address;

        return $this->http->put(
                uri: $this->uri,
            body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update a list of IPs.
*
* @param array $data Array of IPs to update.
* @param array $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchList(
        array $data    = [],
        array $headers = []
    ) : array
    {
        return $this->http->put(
            uri: $this->uri,
            body: $data,
        headers: $headers
        );
    }



/* DELETE METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Delete an individual IP.
* 
* @param integer $id A unique integer value identifying an IP.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function deleteDetail( int $id, array $headers = [] ) : array
    {
        $this->uri .= "{$id}/";

        return $this->http->delete( uri: $this->uri, headers: $headers );
    }



/* DELETE METHOD LIST
---------------------------------------------------------------------------- */

/*
* Delete a list of IPs.
* 
* @param array $data List of IPs to delete. Each IP must have an ID.
* @param array $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function deleteList( 
        array $data, 
        array $headers = [] 
    ) : array
    {
        return $this->http->delete( 
            uri: $this->uri, 
            body: $data, 
        headers: $headers 
        );
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
