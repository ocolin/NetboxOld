<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class InventoryItemTemplates extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'inventory-item-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single Template.
*
* @param string  $name Name of Template.
* @param integer $device_type ID of Device type Template belongs to. 
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']        = $name;
        $data['device_type'] = $device_type;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Template
* 
* @param integer $id Numerical ID of Template to update.
* @param string  $name Name of Template.
* @param integer $device_type ID of Device type Template belongs to. 
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device_type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update Template value(s).
*
* @param integer $id Numerical ID of Template to update.
* @param string  $name Name of Template.
* @param integer $device_type ID of Device type Template belongs to. 
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device_type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
