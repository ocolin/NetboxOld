<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class RearPortTemplates extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'rear-port-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Create a single Template.
*
* @param string  $name Name of Template.
* @param integer $device ID of Device type the Template belongs to. 
* @param string  $type Port connector type.
* @param array   $options optionsl data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
        string $type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']        = $name;
        $options['device_type'] = $device_type;
        $options['type']        = $type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PUT METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Template
* 
* @param integer $id Numerical ID of Template to update.
* @param string  $name Name of Template.
* @param integer $device ID of Device type the Template belongs to. 
* @param string  $type Port connector type.
* @param array   $options optional data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
        string $type,
           int $device_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']        = $name;
        $options['device_type'] = $device_type;
        $options['type']        = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }



/* PATCH METHOD DETAIL
---------------------------------------------------------------------------- */

/**
* Update Template value(s).
*
* @param integer $id Numerical ID of Template to update.
* @param string  $name Name of Template.
* @param integer $device ID of Device type the Template belongs to.
* @param string  $type Port connector type. 
* @param array   $options optional data to be sent.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
        string $type,
           int $device_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']        = $name;
        $options['device_type'] = $device_type;
        $options['type']        = $type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
            headers: $headers
        );
    }
}
