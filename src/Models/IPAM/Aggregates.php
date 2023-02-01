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
}
