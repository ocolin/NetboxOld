<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\Circuits;

use Cruzio\Netbox\Models\HTTP;

class DeviceTypes extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'device-types/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single DeviceType.
*
* @param string $name Name of DeviceType.
* @param string $slug 
* @param array  $data optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $manufacturer,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $data['name']         = $name;
        $data['slug']         = $slug;
        $data['manufacturer'] = $manufacturer;

        return $this->http->post(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update DeviceType
* 
* @param integer $id Numerical ID of DeviceType to update.
* @param string  $name Name of DeviceType to update.
* @param string  $slug Slug of DeviceType to update.
* @param array   $data Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
           int $manufacturer,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']         = $name;
        $data['slug']         = $slug;
        $data['manufacturer'] = $manufacturer;
        

        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Update DeviceType value(s).
*
* @param integer $id Numerical ID of DeviceType to update.
* @param string  $name Name of DeviceType to update.
* @param string  $slug Slug of DeviceType to update.
* @param array   $data Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
           int $manufacturer,
        string $name,
        string $slug,
         array $data    = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $data['name']         = $name;
        $data['slug']         = $slug;
        $data['manufacturer'] = $manufacturer;


        return $this->http->put(
                uri: $this->uri,
               body: $data,
            headers: $headers
        );
    }
}
