<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class CircuitCircuits extends Circuits
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'circuits/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Circuit.
*
* @param string  $cid Name of circuit ID.
* @param integer $provider ID of circuit provider.
* @param integer $type ID of circuit type.
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $cid,
           int $provider,
           int $type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['cid']      = $cid;
        $data['provider'] = $provider;
        $data['type']     = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Module
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param string  $cid Name of circuit ID.
* @param integer $provider ID of circuit provider.
* @param integer $type ID of circuit type.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $cid,
           int $provider,
           int $type,
          array $data    = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['cid']      = $cid;
        $data['provider'] = $provider;
        $data['type']     = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Module value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param string  $cid Name of circuit ID.
* @param integer $provider ID of circuit provider.
* @param integer $type ID of circuit type.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $cid,
           int $provider,
           int $type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['cid']      = $cid;
        $data['provider'] = $provider;
        $data['type']     = $type;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
