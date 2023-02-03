<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Devices extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'devices/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Device.
*
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* #param string  $face Rack face.
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
           int $device_role,
           int $tenant,
        string $name,
        string $face,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['device_role'] = $device_role;
        $data['tenant']      = $tenant;
        $data['face']        = $face;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Device
* 
* @param integer $id Numerical ID of Template to update.
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* #param string  $face Rack face.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $device_type,
           int $device_role,
           int $tenant,
        string $name,
        string $face,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['device_role'] = $device_role;
        $data['tenant']      = $tenant;
        $data['face']        = $face;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Device value(s).
*
* @param integer $id Numerical ID of Template to update.
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* #param string  $face Rack face.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $device_type,
           int $device_role,
           int $tenant,
        string $name,
        string $face,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['device_role'] = $device_role;
        $data['tenant']      = $tenant;
        $data['face']        = $face;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
