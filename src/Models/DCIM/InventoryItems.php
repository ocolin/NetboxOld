<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class InventoryItems extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'inventory-items/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single item.
*
* @param string  $name Name of item.
* @param integer $device ID of device. 
* @param array   $options optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']   = $name;
        $options['device'] = $device;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update item
* 
* @param integer $id Numerical ID of item to update.
* @param string  $name Name of item.
* @param integer $device ID of device. 
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update item value(s).
*
* @param integer $id Numerical ID of item to update.
* @param string  $name Name of item.
* @param integer $deviceoo ID of device. 
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device,
        array $options = [],
        array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']   = $name;
        $options['device'] = $device;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
