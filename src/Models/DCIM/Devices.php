<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;
use Cruzio\Netbox\Options\DCIM\Devices AS Options;

class Devices extends DCIM_Core
{
    protected Options $options;
    
    public function __construct( HTTP $http = null )
    {
        $this->options = new Options();
        parent::__construct( http: $http );
        $this->uri .= 'devices/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Device.
*
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* @param string  $face Rack face.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
           int $device_role,
           int $tenant,
           int $site,
           int $rack,
           int $virtual_chassis,
           int $vc_position,
        string $name,
        string $face,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $options = $options ?? $this->options;

        $options->name            = $name;
        $options->device_type     = $device_type;
        $options->device_role     = $device_role;
        $options->tenant          = $tenant;
        $options->face            = $face;
        $options->site            = $site;
        $options->rack            = $rack;
        $options->virtual_chassis = $virtual_chassis;
        $options->vc_position     = $vc_position;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Device
* 
* @param integer $id Numerical ID of Template to update.
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* @param string  $face Rack face.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $device_type,
           int $device_role,
           int $tenant,
           int $site,
           int $rack,
           int $virtual_chassis,
           int $vc_position,
        string $name,
        string $face,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name            = $name;
        $options->device_type     = $device_type;
        $options->device_role     = $device_role;
        $options->tenant          = $tenant;
        $options->face            = $face;
        $options->site            = $site;
        $options->rack            = $rack;
        $options->virtual_chassis = $virtual_chassis;
        $options->vc_position     = $vc_position;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Device value(s).
*
* @param integer $id Numerical ID of Template to update.
* @param integer $device_type ID of Device type Device belongs to. 
* @param integer $device_role ID or role that device plays.
* @param string  $name Name of Device.
* @param string  $face Rack face.
* @param Options $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $device_type,
           int $device_role,
           int $tenant,
           int $site,
           int $rack,
           int $virtual_chassis,
           int $vc_position,
        string $name,
        string $face,
       Options $options = null,
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options = $options ?? $this->options;

        $options->name            = $name;
        $options->device_type     = $device_type;
        $options->device_role     = $device_role;
        $options->tenant          = $tenant;
        $options->face            = $face;
        $options->site            = $site;
        $options->rack            = $rack;
        $options->virtual_chassis = $virtual_chassis;
        $options->vc_position     = $vc_position;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
