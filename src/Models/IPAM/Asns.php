<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Asns extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'asns/';
    }


/* GET METHOD LIST
---------------------------------------------------------------------------- */

/*
 * Get all ASNs
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
* Get an individual ASNs
*
* @param integer $id Numerical ID of ASN record.
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
* Creat multiple ASNs at once.
*
* @param array $data An array of ASN arrays. 
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
* Create a single ASN.
*
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optionsl data to be sent.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $asn,
           int $rir,
         array $data    = [],
        array $headers = []
    ) : array
    {
        $data['asn'] = $asn;
        $data['rir'] = $rir;

        return $this->http->post(
               uri: $this->uri,
              body: $data,
           headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update ASN
* 
* @param integer $id Numerical ID of ASN to update.
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optional data to send.
* @param array   $headers Optional HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
          int $id,
          int $asn,
          int $rir,
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['asn'] = $asn;
        $data['rir'] = $rir;

        return $this->http->put(
               uri: $this->uri,
              body: $data,
           headers: $headers
        );
    }



/* PUT METHOD LIST
---------------------------------------------------------------------------- */

/*
* Updte an array of ASNs.
*
* @param array $data List of ASNs to update.
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
* Update ASN value(s).
*
* @param integer $id Numerical ID of ASN to update.
* @param integer $asn Numeric value of ASN
* @param integer $rir ID of RIR.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
          int $id,
          int $asn,
          int $rir,
        array $data    = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['asn'] = $asn;
        $data['rir'] = $rir;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update a list of ASNs.
*
* @param array $data Array of ASNs to update.
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
* Delete an individual ASN.
* 
* @param integer $id A unique integer value identifying an ASN.
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
* Delete a list of ASNs.
* 
* @param array $data List of ASNs to delete. Each ASN must have an ID.
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
