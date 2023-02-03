<?php

declare( strict_types = 1 );

namespace Cruzio\Netbox\Models\DCIM;

use Cruzio\Netbox\Models\HTTP;

class ConsoleServerPortTemplates extends DCIM
{
    public function __construct( HTTP $http = null )
    {
        parent::__construct( http: $http );
        $this->uri .= 'console-server-port-templates/';
    }


/* POST METHOD DETAIL
---------------------------------------------------------------------------- */

/*
* Create a single template.
*
* @param string  $name Name of template.
* @param integer $device ID of device type. 
* @param array  $options optionsl data to be sent
* @param array $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function postDetail(
           int $device_type,
        string $name,
         array $options = [],
         array $headers = []
    ) : array
    {
        $options['name']        = $name;
        $options['device_type'] = $device_type;

        return $this->http->post(
                uri: $this->uri,
               body: $options,
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
* @param integer $device ID of device type. 
* @param array   $options Optional data to send.
* @param array   $headers HTML request headers
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function putDetail(
           int $id,
        string $name,
           int $device_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']        = $name;
        $options['device_type'] = $device_type;

        return $this->http->put(
                uri: $this->uri,
               body: $options,
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
* @param integer $device ID of device type. 
* @param array   $options Optional data to modify.
* @param array   $headers HTML request headers.
* @return array Array of HTTP status, headers, and body from Netbox API.
*/

    public function patchDetail(
           int $id,
        string $name,
           int $device_type,
         array $options = [],
         array $headers = []
    ) : array
    {
        $this->uri .= "{$id}/";
        $options['name']        = $name;
        $options['device_type'] = $device_type;


        return $this->http->put(
                 uri: $this->uri,
                body: $options,
             headers: $headers
        );
    }
}
