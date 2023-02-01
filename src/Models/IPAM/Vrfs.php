<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\IPAM;

use Cruzio\Netbox\Models\HTTP;

class Vrfs extends IPAM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'vrfs/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single VRF.
*
* @param string $name Name of VRF.
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name'] = $name;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update VRF
* 
* @param integer $id Numerical ID of VRF to update.
* @param string  $name Name of VRF to update.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update VRF value(s).
*
* @param integer $id Numerical ID of VRF to update.
* @param string  $name Name of VRF to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name'] = $name;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
