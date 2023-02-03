<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Extras;

use Cruzio\Netbox\Models\HTTP;

class Extras
{
    protected string $uri = 'extras/';

    protected HTTP $http;

    public function __construct( HTTP $http = null )
    {
        $this->http = $http ?? new HTTP();
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


/* DELETE METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Delete an individual object.
* 
* @param integer $id A unique integer value identifying an object.
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
* Delete a list of objects.
* 
* @param array $data List of object to delete. Each object must have an ID.
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


    
/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update a list of objects.
*
* @param array $data Array of Objects to update.
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



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
* Updte an array of object.
*
* @param array $data List of objects to update.
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



/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
* Get all Objects
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



/* POST METHOD LIST
---------------------------------------------------------------------------- */

/*
* Create multiple objects at once.
*
* @param array $data An array of object arrays. Each sub array MUST have a 
*  name and slug key. 
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



 /* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Get an individual object
*
* @param integer $id Numerical ID of an object record.
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
}
