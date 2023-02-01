<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Aggregates extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'aggregates/';
    }


/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Get all Aggregates
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
* @param integer $id Numerical ID of Aggregate record.
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
* Creat multiple Aggregates at once.
*
* @param array $data An array of Aggregate arrays. 
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
* Create a single Aggregate.
*
* @param string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param integer $rir ID of RIR.
* @param array   $data Optionsl data to be sent.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $prefix,
           int $rir,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['prefix'] = $prefix;
        $data['rir']    = $rir;

        return $this->http->post(
              uri: $this->uri,
             body: $data,
          headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Aggregate
* 
* @param integer $id Numerical ID of Aggregate to update.
* @param string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param integer $rir ID of RIR.
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $prefix,
           int $rir,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['prefix'] = $prefix;
        $data['rir']    = $rir;

        return $this->http->put(
              uri: $this->uri,
             body: $data,
          headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
* Updte an array of Aggregates.
*
* @param array $data List of Aggregates to update.
* @param array $headers Optional HTML request headers.
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
* Update Aggregate value(s).
*
* @param integer $id Numerical ID of Aggregate to update.
* @param string  $prefix Subnet prefix, ex: '192.168.1.0/24' 
* @param integer $rir ID of RIR.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $prefix,
           int $rir,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['prefix'] = $prefix;
        $data['rir']    = $rir;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update a list of Aggregates.
*
* @param array $data Array of Aggregates to update.
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
* Delete an individual Aggregate.
* 
* @param integer $id A unique integer value identifying an Aggregate.
* @param array   $headers Optional HTML request headers.
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
* Delete a list of Aggregates.
* 
* @param array $data List of Aggregates to delete. Each Aggregate must have an ID.
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

}
