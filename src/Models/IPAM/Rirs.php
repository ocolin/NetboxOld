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
}
