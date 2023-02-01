<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Rirs extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'rirs/';
    }


/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Get all RIRs
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
* Get an individual RIR
*
* @param integer $id Numerical ID of RIR record.
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
* Creat multiple RIRs at once.
*
* @param array $data An array of RIR arrays. Each sub array MUST have a 
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

/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single RIR.
*
* @param string $name Name of RIR.
* @param string $slug 
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name'] = $name;
        $data['slug'] = $slug;

        return $this->http->post(
               uri: $this->uri,
              body: $data,
           headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update RIR
* 
* @param integer $id Numerical ID of RIR to update.
* @param string  $name Name of RIR to update.
* @param string  $slug Slug of RIR to update.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;
        $data['slug'] = $slug;

        return $this->http->put(
              uri: $this->uri,
             body: $data,
          headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
* Updte an array of RIRs.
*
* @param array $data List of RIRs to update.
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
* Update RIR value(s).
*
* @param integer $id Numerical ID of RIR to update.
* @param string  $name Name of RIR to update.
* @param string  $slug Slug of RIR to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
       string $name,
       string $slug,
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;
        $data['slug'] = $slug;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update a list of RIRs.
*
* @param array $data Array of RIRs to update.
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
* Delete an individual RIR.
* 
* @param integer $id A unique integer value identifying a RIR.
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
* Delete a list of RIRs.
* 
* @param array $data List of RIRs to delete. Each RIR must have an ID.
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
