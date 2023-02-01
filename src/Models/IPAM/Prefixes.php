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



/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Get all Prefixes
 *
 * @param array $params URL parameters.
 * @param array $headers Customer HTTP request headers.
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
 * Get an individual Prefix
 *
 * @param integer $id Numerical ID of prefix record.
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
 * Creat multiple Prefixes at once.
 *
 * @param array $data An array of prefix arrays. Each sub array MUST have a 
 *  prefix key. ex. data: [['prefix' => '1.1.1.0/24'], ['prefix' => '2.2.2.0/24']]
 * @param array $headers HTML request headers
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
 * Create a single prefix.
 *
 * @param string $prefix IP Subnet. ex prefix: '1.1.1.0/24'
 * @param array  $data optionsl data to be sent
 * @param array $headers HTML request headers
 * @return array Array of HTTP status, headers, and body from Netbox API.
*/
    
    public function postDetail(
        string $prefix,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['prefix'] = $prefix;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
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
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['prefix'] = $prefix;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Updte an array of prefixes.
 *
 * @param array $data List of prefixes to update
 * @param array $headers HTML request headers
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
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['prefix'] = $prefix;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
 * Update a list of prefixes.
 *
 * @param array $data Array of prefixes to update.
 * @param array $headers HTML request headers.
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
 * Delete an individual prefix.
 * 
 * @param integer $id A unique integer value identifying a prefix.
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
 * Delete a list of prefixes.
 * 
 * @param array $data List of prefixes to delete.
 * @param array $headers HTML request headers.
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
