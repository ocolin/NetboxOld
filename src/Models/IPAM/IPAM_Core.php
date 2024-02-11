<?php

declare( strict_types = 1 );

namespace Cruzio\lib\Netbox\Models\IPAM;

use Cruzio\lib\Netbox\Models\HTTP;
use Cruzio\lib\Netbox\Models\Models_Core;

abstract class IPAM_Core extends Models_Core
{

    public function __construct( HTTP $http = null )
    {
        $this->uri = 'ipam/';
        $this->http = $http ?? new HTTP();
        parent::__construct( http: $http );
    }


    
/* OPTIONS METHOD
---------------------------------------------------------------------------- */

/**
* List details about API call.
*
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function options( array $headers = [] ) : array
    {
        return $this->http->options( uri: $this->uri, headers: $headers );
    }


/* DELETE METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Delete an individual object.
* 
* @param integer $id A unique integer value identifying an object.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function deleteDetail( int $id, array $headers = [] ) : array
    {
        $this->uri .= "{$id}/";

        return $this->http->delete( uri: $this->uri, headers: $headers );
    }



/* DELETE METHOD LIST
---------------------------------------------------------------------------- */

/**
* Delete a list of objects.
* 
* @param  array<string, string> $options List of object to delete. Each object must have an ID.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function deleteList( 
        array $options, 
        array $headers = [] 
    ) : array
    {
        return $this->http->delete( 
                uri: $this->uri, 
               body: $options, 
            headers: $headers 
        );
    }


/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update a list of objects.
*
* @param  array<string, string> $options Array of Objects to update.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchList(
        array $options    = [],
        array $headers = []
    ) : array
    {
        return $this->http->patch(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/**
* Updte an array of object.
*
* @param array<string, string> $options List of objects to update.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function putList(
        array $options,
        array $headers = []
    ) : array
    {
        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* GET METHOD LIST
---------------------------------------------------------------------------- */

/**
* Get all Objects
*
* @param  array<string, string> $params Optional URL parameters.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
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

/**
* Create multiple objects at once.
*
* @param array<string, string> $options An array of object arrays. Each sub array MUST have a 
*  name and slug key. 
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
*/

    public function postList(
        array $options,
        array $headers = []
    ) : array
    {
        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }


 /* GET METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Get an individual object
*
* @param  integer $id Numerical ID of an object record.
* @param  array<string, string> $params Optional GET parameters.
* @param  array<string, string> $headers HTML request headers
* @return array<string, mixed> Array of HTTP status, headers, and body from Netbox API.
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
