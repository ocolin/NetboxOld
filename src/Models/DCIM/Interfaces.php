<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class Interfaces extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'interfaces/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single interface.
*
* @param string  $name Name of interface.
* @param integer $device ID of device. 
* @param string  $type interface type.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
        string $name,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']   = $name;
        $options['device'] = $device;
        $options['type']   = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update interface
* 
* @param integer $id Numerical ID of interface to update.
* @param string  $name Name of interface.
* @param integer $device ID of device. 
* @param string  $type interface type.
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;
        $options['type']   = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update interface value(s).
*
* @param integer $id Numerical ID of interface to update.
* @param string  $name Name of interface.
* @param integer $deviceoo ID of device. 
* @param string  $type interface type.
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
        string $type,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;
        $options['type']   = $type;


        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
