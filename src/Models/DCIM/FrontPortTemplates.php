<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class FrontPortTemplates extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'front-port-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single template.
*
* @param string  $name Name of template.
* @param integer $device_type ID of device type. 
* @param string  $type port type.
* @param array   $data optionsl data to be sent
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
        string $type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['type']        = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update template
* 
* @param integer $id Numerical ID of Consol Port to update.
* @param string  $name Name of template.
* @param integer $device_type ID of device type. 
* @param string  $type Port type.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device_type,
        string $type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['type']        = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update template value(s).
*
* @param integer $id Numerical ID of Console Port to update.
* @param string  $name Name of template.
* @param integer $device_typeoo ID of device type. 
* @param string  $type Port type.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device_type,
        string $type,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']        = $name;
        $data['device_type'] = $device_type;
        $data['type']        = $type;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
