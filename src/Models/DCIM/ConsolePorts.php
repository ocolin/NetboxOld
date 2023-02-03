<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class ConsolePorts extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'console-ports/';
    }



/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Console Port.
*
* @param string  $name Name of Console Port.
* @param integer $device ID of device port belongs to. 
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']   = $name;
        $data['device'] = $device;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Console Port
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param string  $name Name of Console Port.
* @param integer $device ID of device port belongs to. 
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
          array $data    = [],
          array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']   = $name;
        $data['device'] = $device;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Console Port value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param string  $name Name of Console Port.
* @param integer $device ID of device port belongs to. 
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']   = $name;
        $data['device'] = $device;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
